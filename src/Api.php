<?php

namespace ilhamrisky\PddiktiApi;

use Illuminate\Support\Facades\Log;

class Api
{
    protected $helper;

    public function __construct()
    {
        $this->helper = new Helper();
    }

    /**
     * Handle errors for API calls.
     *
     * @param callable $func
     * @return callable
     */
    public static function handleErrors(callable $func)
    {
        return function (...$args) use ($func) {
            try {
                $response = $func(...$args);
                if ($response === null || (is_array($response) && array_key_exists('error', $response))) {
                    throw new \Exception("API response indicates an error");
                }
                return $response;
            } catch (\Exception $e) {
                Log::error("Error occurred: " . $e->getMessage());
                return null;
            }
        };
    }

    // Search all categories by keyword
    public function searchAll($keyword)
    {
        $endpoint = $this->helper->endpoint() . '/pencarian/all/' . $this->helper->parse($keyword);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Search for students by keyword
    public function searchMahasiswa($keyword)
    {
        $endpoint = $this->helper->endpoint() . '/pencarian/mhs/' . $this->helper->parse($keyword);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Search for lecturers by keyword
    public function searchDosen($keyword)
    {
        $endpoint = $this->helper->endpoint() . '/pencarian/dosen/' . $this->helper->parse($keyword);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Search for universities by keyword
    public function searchPt($keyword)
    {
        $endpoint = $this->helper->endpoint() . '/pencarian/pt/' . $this->helper->parse($keyword);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Search for study programs by keyword
    public function searchProdi($keyword)
    {
        $endpoint = $this->helper->endpoint() . '/pencarian/prodi/' . $this->helper->parse($keyword);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get detailed information of a student by ID
    public function getDetailMahasiswa($mahasiswaId)
    {
        $endpoint = $this->helper->endpoint() . '/detail/mhs/' . $this->helper->parse($mahasiswaId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get lecturer profile by ID
    public function getDosenProfile($dosenId)
    {
        $endpoint = $this->helper->endpoint() . '/dosen/profile/' . $this->helper->parse($dosenId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get research activities of a lecturer by ID
    public function getDosenPenelitian($dosenId)
    {
        $endpoint = $this->helper->endpoint() . '/dosen/portofolio/penelitian/' . $this->helper->parse($dosenId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get community service activities of a lecturer by ID
    public function getDosenPengabdian($dosenId)
    {
        $endpoint = $this->helper->endpoint() . '/dosen/portofolio/pengabdian/' . $this->helper->parse($dosenId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get academic works of a lecturer by ID
    public function getDosenKarya($dosenId)
    {
        $endpoint = $this->helper->endpoint() . '/dosen/portofolio/karya/' . $this->helper->parse($dosenId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get patents of a lecturer by ID
    public function getDosenPaten($dosenId)
    {
        $endpoint = $this->helper->endpoint() . '/dosen/portofolio/paten/' . $this->helper->parse($dosenId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get study history of a lecturer by ID
    public function getDosenStudyHistory($dosenId)
    {
        $endpoint = $this->helper->endpoint() . '/dosen/study-history/' . $this->helper->parse($dosenId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get teaching history of a lecturer by ID
    public function getDosenTeachingHistory($dosenId)
    {
        $endpoint = $this->helper->endpoint() . '/dosen/teaching-history/' . $this->helper->parse($dosenId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get detailed information of a university by ID
    public function getDetailPt($ptId)
    {
        $endpoint = $this->helper->endpoint() . '/pt/detail/' . $this->helper->parse($ptId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get study programs of a university by ID and year
    public function getProdiPt($ptId, $tahun)
    {
        $endpoint = $this->helper->endpoint() . '/pt/detail/' . $this->helper->parse($ptId) . '/' . $this->helper->parse($tahun);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get the logo of a university by ID
    public function getLogoPt($ptId)
    {
        $url = $this->helper->endpoint() . '/pt/logo/' . $this->helper->parse($ptId);
        return self::handleErrors(fn() => $this->helper->fetchImageAsBase64($url))();
    }

    // Get lecturer-student ratio of a university by ID
    public function getRasioPt($ptId)
    {
        $endpoint = $this->helper->endpoint() . '/pt/rasio/' . $this->helper->parse($ptId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get students of a university by ID
    public function getMahasiswaPt($ptId)
    {
        $endpoint = $this->helper->endpoint() . '/pt/mahasiswa/' . $this->helper->parse($ptId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get study time of a university by ID
    public function getWaktuStudiPt($ptId)
    {
        $endpoint = $this->helper->endpoint() . '/pt/waktu-studi/' . $this->helper->parse($ptId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get name history of a university by ID
    public function getNameHistoriesPt($ptId)
    {
        $endpoint = $this->helper->endpoint() . '/pt/name-histories/' . $this->helper->parse($ptId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get cost range of a university by ID
    public function getCostRangePt($ptId)
    {
        $endpoint = $this->helper->endpoint() . '/pt/cost-range/' . $this->helper->parse($ptId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get graduation rate of a university by ID
    public function getGraduationRatePt($ptId)
    {
        $endpoint = $this->helper->endpoint() . '/pt/graduation-rate/' . $this->helper->parse($ptId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get the number of study programs of a university by ID
    public function getJumlahProdiPt($ptId)
    {
        $endpoint = $this->helper->endpoint() . '/pt/jumlah-prodi/' . $this->helper->parse($ptId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get the number of students of a university by ID
    public function getJumlahMahasiswaPt($ptId)
    {
        $endpoint = $this->helper->endpoint() . '/pt/jumlah-mahasiswa/' . $this->helper->parse($ptId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get the number of lecturers of a university by ID
    public function getJumlahDosenPt($ptId)
    {
        $endpoint = $this->helper->endpoint() . '/pt/jumlah-dosen/' . $this->helper->parse($ptId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get file name of sarpras of a university by ID
    public function getSarprasFileNamePt($ptId)
    {
        $endpoint = $this->helper->endpoint() . '/pt/sarpras-file-name/' . $this->helper->parse($ptId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get sarpras blob of a university by ID
    public function getSarprasBlobPt($ptId)
    {
        $endpoint = $this->helper->endpoint() . '/pt/sarpras-blob/' . $this->helper->parse($ptId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get detailed information of a study program by ID
    public function getDetailProdi($prodiId)
    {
        $endpoint = $this->helper->endpoint() . '/prodi/detail/' . $this->helper->parse($prodiId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get description of a study program by ID
    public function getDescProdi($prodiId)
    {
        $endpoint = $this->helper->endpoint() . '/prodi/desc/' . $this->helper->parse($prodiId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get name history of a study program by ID
    public function getNameHistoriesProdi($prodiId)
    {
        $endpoint = $this->helper->endpoint() . '/prodi/name-histories/' . $this->helper->parse($prodiId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get the number of students and lecturers in a study program by ID
    public function getNumStudentsLecturersProdi($prodiId)
    {
        $endpoint = $this->helper->endpoint() . '/prodi/num-students-lecturers/' . $this->helper->parse($prodiId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get cost range of a study program by ID
    public function getCostRangeProdi($prodiId)
    {
        $endpoint = $this->helper->endpoint() . '/prodi/cost-range/' . $this->helper->parse($prodiId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get capacity of a study program by ID
    public function getDayaTampungProdi($prodiId)
    {
        $endpoint = $this->helper->endpoint() . '/prodi/daya-tampung/' . $this->helper->parse($prodiId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get lecturer-student ratio of a study program by ID
    public function getRasioDosenMahasiswaProdi($prodiId)
    {
        $endpoint = $this->helper->endpoint() . '/prodi/rasio-dosen-mahasiswa/' . $this->helper->parse($prodiId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get graduation rate of a study program by ID
    public function getGraduationRateProdi($prodiId)
    {
        $endpoint = $this->helper->endpoint() . '/prodi/graduation-rate/' . $this->helper->parse($prodiId);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get the logo of a study program by ID
    public function getLogoProdi($ptId)
    {
        $url = $this->helper->endpoint() . '/prodi/logo-pt/' . $this->helper->parse($ptId);
        return self::handleErrors(fn() => $this->helper->fetchImageAsBase64($url))();
    }

    // Get homebase ratio of a study program by ID and academic year
    public function getHomebaseProdi($prodiId, $tahun)
    {
        $endpoint = $this->helper->endpoint() . '/dosen/homebase/' . $this->helper->parse($prodiId) . '?semester=' . $this->helper->parse($tahun);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get ratio counter of a study program by ID and academic year
    public function getPenghitungRatioProdi($prodiId, $tahun)
    {
        $endpoint = $this->helper->endpoint() . '/dosen/penghitung-ratio/' . $this->helper->parse($prodiId) . '?semester=' . $this->helper->parse($tahun);
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get active lecturer count
    public function getDosenCountActive()
    {
        $endpoint = $this->helper->endpoint() . '/dosen/count-active';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get active student count
    public function getMahasiswaCountActive()
    {
        $endpoint = $this->helper->endpoint() . '/mahasiswa/count-active';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get the count of study programs
    public function getProdiCount()
    {
        $endpoint = $this->helper->endpoint() . '/prodi/count';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get the count of universities
    public function getPtCount()
    {
        $endpoint = $this->helper->endpoint() . '/pt/count';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for lecturers' activeness
    public function getDataDosenKeaktifan()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/dosen-keaktifan';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for lecturers' fields of study
    public function getDataDosenBidang()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/dosen-bidang';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for lecturers' gender distribution
    public function getDataDosenJenisKelamin()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/dosen-jenis-kelamin';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for lecturers' academic levels
    public function getDataDosenJenjang()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/dosen-jenjang';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for lecturers' employment binding
    public function getDataDosenIkatan()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/dosen-ikatan';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for students' fields of study
    public function getDataMahasiswaBidang()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/mahasiswa-bidang';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for students' gender distribution
    public function getDataMahasiswaJenisKelamin()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/mahasiswa-jenis-kelamin';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for students by educational level
    public function getDataMahasiswaJenjang()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/mahasiswa-jenjang';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for students based on institutional groups
    public function getDataMahasiswaKelompokLembaga()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/mahasiswa-kelompok-lembaga';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for students' status (active, inactive)
    public function getDataMahasiswaStatus()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/mahasiswa-status';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for universities' types
    public function getDataPtBentuk()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/pt-bentuk';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for universities' accreditation levels
    public function getDataPtAkreditasi()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/pt-akreditasi';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for universities' administrative overseer groups
    public function getDataPtKelompokPembina()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/pt-kelompok-pembina';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for universities by province
    public function getDataPtProvinsi()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/pt-provinsi';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for academic programs by level
    public function getDataProdiJenjang()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/prodi-jenjang';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for academic programs by accreditation
    public function getDataProdiAkreditasi()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/prodi-akreditasi';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for academic programs by field of study
    public function getDataProdiBidangIlmu()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/prodi-bidang-ilmu';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get data visualization for academic programs grouped by administrative overseer
    public function getDataProdiKelompokPembina()
    {
        $endpoint = $this->helper->endpoint() . '/visualisasi/prodi-kelompok-pembina';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get the list of contributors
    public function getContributor()
    {
        $endpoint = $this->helper->endpoint() . '/contributor/contributor';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get the list of news articles
    public function getNews()
    {
        $endpoint = $this->helper->endpoint() . '/news/list';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }

    // Get the field of sciences
    public function getBidangIlmuProdi()
    {
        $endpoint = $this->helper->endpoint() . '/prodi/bidang-ilmu';
        return self::handleErrors(fn() => $this->helper->response($endpoint))();
    }
}
