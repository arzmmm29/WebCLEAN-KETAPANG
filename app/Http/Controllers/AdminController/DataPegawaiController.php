<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Smalot\PdfParser\Parser;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class DataPegawaiController extends Controller
{
    function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('Admin.Datapegawai.index', $data);
    }

    function create()
    {
        return view('Admin.Datapegawai.create');
    }
    public function store(Request $request)
{
    $messages = [
        'NID.required' => 'NID wajib diisi.',
        'Nama.required' => 'Nama wajib diisi.',
        'Kota_Kelahiran.required' => 'Kota kelahiran wajib diisi.',
        'Tanggal_Lahir.required' => 'Tanggal lahir wajib diisi.',
        'Tanggal_Lahir.date' => 'Tanggal lahir harus berupa tanggal yang valid.',
        'Tanggal_Lahir.before_or_equal' => 'Tanggal lahir tidak boleh lebih dari 20 tahun sebelum tahun 2024.',
        'Jenis_Kelamin.required' => 'Jenis kelamin wajib diisi.',
        'Status_Pernikahan.required' => 'Status pernikahan wajib diisi.',
        'Pendidikan.required' => 'Pendidikan wajib diisi.',
        'Sekolah_Universitas.required' => 'Sekolah/Universitas wajib diisi.',
        'Alamat_KTP.required' => 'Alamat KTP wajib diisi.',
        'Alamat_Domisili.required' => 'Alamat domisili wajib diisi.',
        'Nomor_Hp.required' => 'Nomor HP wajib diisi.',
        'Nomor_Hp.max' => 'Nomor HP maksimal 15 digit.',
        'Email.required' => 'Email wajib diisi.',
        'Email.email' => 'Format email tidak valid.',
        'Email.unique' => 'Email sudah terdaftar.',
        'FTK_NonFTK.required' => 'FTK/NonFTK wajib diisi.',
        'Jabatan.required' => 'Jabatan wajib diisi.',
        'Status.required' => 'Status wajib diisi.',
        'Kode_PRK.required' => 'Kode PRK wajib diisi.',
        'Klasifikasi_Bidang.required' => 'Klasifikasi bidang wajib diisi.',
        'Bagian.required' => 'Bagian bidang wajib diisi.',
        'Nomor_BPJS_Kesehatan.required' => 'Nomor BPJS Kesehatan wajib diisi.',
        'Nomor_BPJS_Kesehatan.unique' => 'Nomor BPJS Kesehatan sudah terdaftar.',
        'Nomor_BPJS_Ketenagakerjaan.required' => 'Nomor BPJS Ketenagakerjaan wajib diisi.',
        'Nomor_BPJS_Ketenagakerjaan.unique' => 'Nomor BPJS Ketenagakerjaan sudah terdaftar.',
        'Status_Kepersertaan_BPJS_Kesehatan.required' => 'Status kepesertaan BPJS Kesehatan wajib diisi.',
        'Status_Kepersertaan_BPJS_Ketenagakerjaan.required' => 'Status kepesertaan BPJS Ketenagakerjaan wajib diisi.',
        'Lokasi_UnitKerja.required' => 'Lokasi unit kerja wajib diisi.',
        'Perusahaan_Penyedia.required' => 'Perusahaan penyedia wajib diisi.',
        'NIK_KTP.required' => 'NIK KTP wajib diisi.',
        'NIK_KTP.unique' => 'NIK KTP sudah terdaftar.',
        'AGAMA.required' => 'Agama wajib diisi.',
        'Atasan.required' => 'Atasan wajib diisi.',
        'Kabupaten_Kota.required' => 'Kabupaten/Kota wajib diisi.',
        'Provinsi.required' => 'Provinsi wajib diisi.',
    ];

    $validator = Validator::make($request->all(), [
        'NID' => 'required|string|max:255|unique:pegawai,NID',
        'Nama' => 'required|string|max:255',
        'Kota_Kelahiran' => 'required|string|max:255',
        'Tanggal_Lahir' => [
            'required',
            'date',
            'before_or_equal:2004-01-01',
        ],
        'Jenis_Kelamin' => 'required|string|max:255',
        'Status_Pernikahan' => 'required|string|max:255',
        'Pendidikan' => 'required|string|max:255',
        'Sekolah_Universitas' => 'required|string|max:255',
        'Alamat_KTP' => 'required|string|max:255',
        'Alamat_Domisili' => 'required|string|max:255',
        'Nomor_Hp' => 'required|string|max:15',
        'Email' => 'required|string|email|max:255|unique:pegawai,Email',
        'FTK_NonFTK' => 'required|string|max:255',
        'Jabatan' => 'required|string|max:255',
        'Status' => 'required|string|max:255',
        'Kode_PRK' => 'required|string|max:255',
        'Klasifikasi_Bidang' => 'required|string|max:255',
        'Bagian' => 'required|string|max:255',
        'Nomor_BPJS_Kesehatan' => 'required|string|max:16|unique:pegawai,Nomor_BPJS_Kesehatan',
        'Status_Kepersertaan_BPJS_Kesehatan' => 'required|string|max:255',
        'Nomor_BPJS_Ketenagakerjaan' => 'required|string|max:11|unique:pegawai,Nomor_BPJS_Ketenagakerjaan',
        'Status_Kepersertaan_BPJS_Ketenagakerjaan' => 'required|string|max:255',
        'Lokasi_UnitKerja' => 'required|string|max:255',
        'Perusahaan_Penyedia' => 'required|string|max:255',
        'NIK_KTP' => 'required|string|max:16|unique:pegawai,NIK_KTP',
        'AGAMA' => 'required|string|max:255',
        'Atasan' => 'required|string|max:255',
        'Kabupaten_Kota' => 'required|string|max:255',
        'Provinsi' => 'required|string|max:255',
    ], $messages);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $pegawai = new Pegawai();
    $pegawai->NID = $request->input('NID');
    $pegawai->Nama = $request->input('Nama');
    $pegawai->Kota_Kelahiran = $request->input('Kota_Kelahiran');
    $pegawai->Tanggal_Lahir = $request->input('Tanggal_Lahir');
    $pegawai->Jenis_Kelamin = $request->input('Jenis_Kelamin');
    $pegawai->Status_Pernikahan = $request->input('Status_Pernikahan');
    $pegawai->Pendidikan = $request->input('Pendidikan');
    $pegawai->Sekolah_Universitas = $request->input('Sekolah_Universitas');
    $pegawai->Alamat_KTP = $request->input('Alamat_KTP');
    $pegawai->Alamat_Domisili = $request->input('Alamat_Domisili');
    $pegawai->Nomor_Hp = $request->input('Nomor_Hp');
    $pegawai->Email = $request->input('Email');
    $pegawai->FTK_NonFTK = $request->input('FTK_NonFTK');
    $pegawai->Jabatan = $request->input('Jabatan');
    $pegawai->Status = $request->input('Status');
    $pegawai->Kode_PRK = $request->input('Kode_PRK');
    $pegawai->Klasifikasi_Bidang = $request->input('Klasifikasi_Bidang');
    $pegawai->Bagian = $request->input('Bagian');
    $pegawai->Nomor_BPJS_Kesehatan = $request->input('Nomor_BPJS_Kesehatan');
    $pegawai->Status_Kepersertaan_BPJS_Kesehatan = $request->input('Status_Kepersertaan_BPJS_Kesehatan');
    $pegawai->Nomor_BPJS_Ketenagakerjaan = $request->input('Nomor_BPJS_Ketenagakerjaan');
    $pegawai->Status_Kepersertaan_BPJS_Ketenagakerjaan = $request->input('Status_Kepersertaan_BPJS_Ketenagakerjaan');
    $pegawai->Lokasi_UnitKerja = $request->input('Lokasi_UnitKerja');
    $pegawai->Perusahaan_Penyedia = $request->input('Perusahaan_Penyedia');
    $pegawai->NIK_KTP = $request->input('NIK_KTP');
    $pegawai->AGAMA = $request->input('AGAMA');
    $pegawai->Atasan = $request->input('Atasan');
    $pegawai->Kabupaten_Kota = $request->input('Kabupaten_Kota');
    $pegawai->Provinsi = $request->input('Provinsi');

    $pegawai->handleUploadFoto();
    $pegawai->save();

    return redirect('DataPegawai')->with('success', 'Data Pegawai Berhasil Di Simpan');
}


    public function show($id)
    {
        return view('Admin.DataPegawai.show', [
            'pegawai' => Pegawai::findOrFail($id),
        ]);
    }

    public function edit($id)
    {
        return view('Admin.DataPegawai.edit', [
            'pegawai' => Pegawai::findOrFail($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'NID' => 'required|string|max:50',
            'Nama' => 'required|string|max:100',
            'Kota_Kelahiran' => 'required|string|max:100',
            'Tanggal_Lahir' => 'required|date',
            'Jenis_Kelamin' => 'required|in:Laki - Laki,Wanita',
            'Status_Pernikahan' => 'required|string|max:50',
            'Pendidikan' => 'required|string|max:50',
            'Sekolah_Universitas' => 'required|string|max:100',
            'Alamat_KTP' => 'required|string|max:255',
            'Alamat_Domisili' => 'required|string|max:255',
            'Nomor_Hp' => 'required|string|max:15',
            'Email' => 'required|email|max:100',
            'FTK_NonFTK' => 'required|string|max:50',
            'Jabatan' => 'required|string|max:100',
            'Status' => 'required|string|max:50',
            'Kode_PRK' => 'required|string|max:50',
            'Klasifikasi_Bidang' => 'required|string|max:100',
            'Bagian' => 'required|string|max:100',
            'Nomor_BPJS_Kesehatan' => 'required|string|max:50',
            'Status_Kepersertaan_BPJS_Kesehatan' => 'required|string|max:50',
            'Nomor_BPJS_Ketenagakerjaan' => 'required|string|max:50',
            'Lokasi_UnitKerja' => 'required|string|max:100',
            'Perusahaan_Penyedia' => 'required|string|max:100',
            'NIK_KTP' => 'required|string|max:16',
            'AGAMA' => 'required|string|max:50',
            'Atasan' => 'required|string|max:100',
            'Kabupaten_Kota' => 'required|string|max:100',
            'Provinsi' => 'required|string|max:100',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pegawai = Pegawai::findOrFail($id);

        // Debugging
        Log::info('Data Update: ', $request->all());

        $pegawai->update($request->except('foto'));

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $pegawai->foto = $filename;
        }

        $pegawai->save();

        return redirect('DataPegawai')->with('success', ' Data Pegawai Berhasil di Edit');
    }




    function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->handleDelete();
        $pegawai->delete();
        return redirect('DataPegawai')->with('danger', 'Data Pegawai Berhasil Dihapus');
    }

    function import_process(Request $request)
{
    // Validasi file
    $request->validate([
        'file' => 'required|mimes:xls,xlsx',
    ], [
        'file.required' => 'File wajib diunggah.',
        'file.mimes' => 'File harus berupa file dengan format xls atau xlsx.',
    ]);

    try {
        // Ambil file yang diupload
        $file = $request->file('file');

        // Load file excel menggunakan PhpSpreadsheet
        $reader = IOFactory::createReaderForFile($file);
        $spreadsheet = $reader->load($file);

        // Ambil sheet pertama
        $sheet = $spreadsheet->getActiveSheet();

        // Iterasi melalui data dan simpan ke database
        foreach ($sheet->getRowIterator() as $row) {
            // Skip header
            if ($row->getRowIndex() < 4) {
                continue;
            }

            // Ambil nilai kolom
            $rowData = [];
            foreach ($row->getCellIterator() as $cell) {
                $rowData[] = $cell->getValue();
            }

            // Konversi nilai tanggal dari Excel ke format PHP
            $excelDate = $rowData[4];  // Pastikan indeks ini sesuai dengan posisi kolom tanggal lahir
            $TanggalLahir = null;
            if (is_numeric($excelDate)) {
                $TanggalLahir = Carbon::instance(Date::excelToDateTimeObject($excelDate));
            } else {
                $TanggalLahir = Carbon::parse($excelDate);
            }

            Pegawai::create([
                'NID' => $rowData[1],
                'Nama' => $rowData[2],
                'Kota_Kelahiran' => $rowData[3],
                'Tanggal_Lahir' => $TanggalLahir,
                'Jenis_Kelamin' => $rowData[5],
                'Status_Pernikahan' => $rowData[6],
                'Pendidikan' => $rowData[7],
                'Sekolah_Universitas' => $rowData[8],
                'Alamat_KTP' => $rowData[9],
                'Alamat_Domisili' => $rowData[10],
                'Nomor_Hp' => $rowData[11],
                'Email' => $rowData[12],
                'FTK_NonFTK' => $rowData[13],
                'Jabatan' => $rowData[14],
                'Klasifikasi_Bidang' => $rowData[15],
                'Nomor_BPJS_Kesehatan' => $rowData[16],
                'Status_Kepersertaan_BPJS_Kesehatan' => $rowData[17],
                'Nomor_BPJS_Ketenagakerjaan' => $rowData[18],
                'Status_Kepersertaan_BPJS_Ketenagakerjaan' => $rowData[19],
                'Lokasi_UnitKerja' => $rowData[20],
                'Perusahaan_Penyedia' => $rowData[21],
                'NIK_KTP' => $rowData[22],
                'AGAMA' => $rowData[23],
                'Atasan' => $rowData[24],
                'Kabupaten_Kota' => $rowData[25],
                'Provinsi' => $rowData[26],
                'Status' => $rowData[27],
                'Kode_PRK' => $rowData[28],
                'Bagian' => $rowData[29],
            ]);
        }

        return redirect('DataPegawai')->with('success', 'Data Pegawai Berhasil Diimpor');

    } catch (\Exception $e) {
        return back()->withErrors(['file' => 'Terjadi kesalahan saat memproses file: ' . $e->getMessage()]);
    }
}

public function generatePDF()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('Admin.DataPegawai.Datapegawai-pdf', $data);
    }

}
