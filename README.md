<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDDIKTI API Laravel Package</title>
</head>
<body>

<h1>PDDIKTI API Laravel Package</h1>

<p>This Laravel package integrates with the PDDIKTI API, providing easy access to university, lecturer, and student data.</p>

<h2>Installation</h2>

<p>To install this package, follow these steps:</p>

<ol>
    <li>Add the package to your Laravel project using Composer:</li>
    <pre><code>composer require ilhamrisky/pddiktiapi</code></pre>

    <li>Publish the configuration file:</li>
    <pre><code>php artisan vendor:publish --provider="IlhamriSKY\PddiktiApi\PddiktiApiServiceProvider" --tag="config"</code></pre>

    <li>Update your environment variables in the <code>.env</code> file:</li>
    <pre><code>PDDIKTI_API_KEY=your-api-key-here

PDDIKTI_API_URL=https://pddikti.kemdikbud.go.id/api</code></pre>

    <li>You're ready to use the PDDIKTI API in your Laravel application.</li>

</ol>

<h2>Usage</h2>

<p>Once installed, you can start using the <code>Api</code> class to interact with the PDDIKTI API. Here's an example of how to use the package:</p>

<pre><code>$api = new \IlhamriSKY\PddiktiApi\Api();
$response = $api->searchAll('Ilham');
dd($response);</code></pre>

<h2>Available Methods</h2>

<p>The following methods are available in the API class:</p>

<ul>
    <li><strong>searchAll</strong>: Search all categories by keyword.</li>
    <pre><code>$response = $api->searchAll('keyword');
dd($response);</code></pre>

    <li><strong>searchMahasiswa</strong>: Search for students by keyword.</li>
    <pre><code>$response = $api->searchMahasiswa('student name');

dd($response);</code></pre>

    <li><strong>searchDosen</strong>: Search for lecturers by keyword.</li>
    <pre><code>$response = $api->searchDosen('lecturer name');

dd($response);</code></pre>

    <li><strong>searchPt</strong>: Search for universities by keyword.</li>
    <pre><code>$response = $api->searchPt('university name');

dd($response);</code></pre>

    <li><strong>searchProdi</strong>: Search for study programs by keyword.</li>
    <pre><code>$response = $api->searchProdi('study program name');

dd($response);</code></pre>

    <li><strong>getDetailMahasiswa</strong>: Get detailed information of a student by ID.</li>
    <pre><code>$response = $api->getDetailMahasiswa('student-id');

dd($response);</code></pre>

    <li><strong>getDosenProfile</strong>: Get profile of a lecturer by ID.</li>
    <pre><code>$response = $api->getDosenProfile('lecturer-id');

dd($response);</code></pre>

    <li><strong>getDosenPenelitian</strong>: Get research activities of a lecturer by ID.</li>
    <pre><code>$response = $api->getDosenPenelitian('lecturer-id');

dd($response);</code></pre>

    <li><strong>getDosenPengabdian</strong>: Get community service activities of a lecturer by ID.</li>
    <pre><code>$response = $api->getDosenPengabdian('lecturer-id');

dd($response);</code></pre>

    <li><strong>getDosenKarya</strong>: Get academic works of a lecturer by ID.</li>
    <pre><code>$response = $api->getDosenKarya('lecturer-id');

dd($response);</code></pre>

    <li><strong>getDosenPaten</strong>: Get patents of a lecturer by ID.</li>
    <pre><code>$response = $api->getDosenPaten('lecturer-id');

dd($response);</code></pre>

    <li><strong>getDosenStudyHistory</strong>: Get study history of a lecturer by ID.</li>
    <pre><code>$response = $api->getDosenStudyHistory('lecturer-id');

dd($response);</code></pre>

    <li><strong>getDosenTeachingHistory</strong>: Get teaching history of a lecturer by ID.</li>
    <pre><code>$response = $api->getDosenTeachingHistory('lecturer-id');

dd($response);</code></pre>

    <li><strong>getDetailPt</strong>: Get detailed information of a university by ID.</li>
    <pre><code>$response = $api->getDetailPt('university-id');

dd($response);</code></pre>

    <li><strong>getProdiPt</strong>: Get study programs of a university by ID and year.</li>
    <pre><code>$response = $api->getProdiPt('university-id', 2023);

dd($response);</code></pre>

    <li><strong>getLogoPt</strong>: Get the logo of a university by ID.</li>
    <pre><code>$response = $api->getLogoPt('university-id');

dd($response);</code></pre>

    <li><strong>getRasioPt</strong>: Get lecturer-student ratio of a university by ID.</li>
    <pre><code>$response = $api->getRasioPt('university-id');

dd($response);</code></pre>

    <li><strong>getMahasiswaPt</strong>: Get students of a university by ID.</li>
    <pre><code>$response = $api->getMahasiswaPt('university-id');

dd($response);</code></pre>

    <li><strong>getWaktuStudiPt</strong>: Get study time of a university by ID.</li>
    <pre><code>$response = $api->getWaktuStudiPt('university-id');

dd($response);</code></pre>

    <li><strong>getNameHistoriesPt</strong>: Get name history of a university by ID.</li>
    <pre><code>$response = $api->getNameHistoriesPt('university-id');

dd($response);</code></pre>

    <li><strong>getCostRangePt</strong>: Get cost range of a university by ID.</li>
    <pre><code>$response = $api->getCostRangePt('university-id');

dd($response);</code></pre>

    <li><strong>getGraduationRatePt</strong>: Get graduation rate of a university by ID.</li>
    <pre><code>$response = $api->getGraduationRatePt('university-id');

dd($response);</code></pre>

    <li><strong>getJumlahProdiPt</strong>: Get the number of study programs of a university by ID.</li>
    <pre><code>$response = $api->getJumlahProdiPt('university-id');

dd($response);</code></pre>

    <li><strong>getJumlahMahasiswaPt</strong>: Get the number of students of a university by ID.</li>
    <pre><code>$response = $api->getJumlahMahasiswaPt('university-id');

dd($response);</code></pre>

    <li><strong>getJumlahDosenPt</strong>: Get the number of lecturers of a university by ID.</li>
    <pre><code>$response = $api->getJumlahDosenPt('university-id');

dd($response);</code></pre>

    <li><strong>getSarprasFileNamePt</strong>: Get the file name of sarpras of a university by ID.</li>
    <pre><code>$response = $api->getSarprasFileNamePt('university-id');

dd($response);</code></pre>

    <li><strong>getSarprasBlobPt</strong>: Get the sarpras blob of a university by ID.</li>
    <pre><code>$response = $api->getSarprasBlobPt('university-id');

dd($response);</code></pre>

    <li><strong>getDetailProdi</strong>: Get detailed information of a study program by ID.</li>
    <pre><code>$response = $api->getDetailProdi('study-program-id');

dd($response);</code></pre>

    <li><strong>getDescProdi</strong>: Get description of a study program by ID.</li>
    <pre><code>$response = $api->getDescProdi('study-program-id');

dd($response);</code></pre>

    <li><strong>getNameHistoriesProdi</strong>: Get name history of a study program by ID.</li>
    <pre><code>$response = $api->getNameHistoriesProdi('study-program-id');

dd($response);</code></pre>

    <li><strong>getNumStudentsLecturersProdi</strong>: Get the number of students and lecturers in a study program by ID.</li>
    <pre><code>$response = $api->getNumStudentsLecturersProdi('study-program-id');

dd($response);</code></pre>

    <li><strong>getCostRangeProdi</strong>: Get the cost range of a study program by ID.</li>
    <pre><code>$response = $api->getCostRangeProdi('study-program-id');

dd($response);</code></pre>

    <li><strong>getDayaTampungProdi</strong>: Get the capacity of a study program by ID.</li>
    <pre><code>$response = $api->getDayaTampungProdi('study-program-id');

dd($response);</code></pre>

    <li><strong>getRasioDosenMahasiswaProdi</strong>: Get lecturer-student ratio of a study program by ID.</li>
    <pre><code>$response = $api->getRasioDosenMahasiswaProdi('study-program-id');

dd($response);</code></pre>

    <li><strong>getGraduationRateProdi</strong>: Get the graduation rate of a study program by ID.</li>
    <pre><code>$response = $api->getGraduationRateProdi('study-program-id');

dd($response);</code></pre>

    <li><strong>getLogoProdi</strong>: Get the logo of a study program by ID.</li>
    <pre><code>$response = $api->getLogoProdi('study-program-id');

dd($response);</code></pre>

    <li><strong>getHomebaseProdi</strong>: Get the homebase ratio of a study program by ID and academic year.</li>
    <pre><code>$response = $api->getHomebaseProdi('study-program-id', 2023);

dd($response);</code></pre>

    <li><strong>getPenghitungRatioProdi</strong>: Get the ratio counter of a study program by ID and academic year.</li>
    <pre><code>$response = $api->getPenghitungRatioProdi('study-program-id', 2023);

dd($response);</code></pre>

    <li><strong>getDosenCountActive</strong>: Get active lecturer count.</li>
    <pre><code>$response = $api->getDosenCountActive();

dd($response);</code></pre>

    <li><strong>getMahasiswaCountActive</strong>: Get active student count.</li>
    <pre><code>$response = $api->getMahasiswaCountActive();

dd($response);</code></pre>

    <li><strong>getProdiCount</strong>: Get the count of study programs.</li>
    <pre><code>$response = $api->getProdiCount();

dd($response);</code></pre>

    <li><strong>getPtCount</strong>: Get the count of universities.</li>
    <pre><code>$response = $api->getPtCount();

dd($response);</code></pre>

    <li><strong>getDataDosenKeaktifan</strong>: Get data visualization for lecturers' activeness.</li>
    <pre><code>$response = $api->getDataDosenKeaktifan();

dd($response);</code></pre>

    <li><strong>getDataDosenBidang</strong>: Get data visualization for lecturers' fields of study.</li>
    <pre><code>$response = $api->getDataDosenBidang();

dd($response);</code></pre>

    <li><strong>getDataDosenJenisKelamin</strong>: Get data visualization for lecturers' gender distribution.</li>
    <pre><code>$response = $api->getDataDosenJenisKelamin();

dd($response);</code></pre>

    <li><strong>getDataDosenJenjang</strong>: Get data visualization for lecturers' academic levels.</li>
    <pre><code>$response = $api->getDataDosenJenjang();

dd($response);</code></pre>

    <li><strong>getDataDosenIkatan</strong>: Get data visualization for lecturers' employment binding.</li>
    <pre><code>$response = $api->getDataDosenIkatan();

dd($response);</code></pre>

    <li><strong>getDataMahasiswaBidang</strong>: Get data visualization for students' fields of study.</li>
    <pre><code>$response = $api->getDataMahasiswaBidang();

dd($response);</code></pre>

    <li><strong>getDataMahasiswaJenisKelamin</strong>: Get data visualization for students' gender distribution.</li>
    <pre><code>$response = $api->getDataMahasiswaJenisKelamin();

dd($response);</code></pre>

    <li><strong>getDataMahasiswaJenjang</strong>: Get data visualization for students by educational level.</li>
    <pre><code>$response = $api->getDataMahasiswaJenjang();

dd($response);</code></pre>

    <li><strong>getDataMahasiswaKelompokLembaga</strong>: Get data visualization for students based on institutional groups.</li>
    <pre><code>$response = $api->getDataMahasiswaKelompokLembaga();

dd($response);</code></pre>

    <li><strong>getDataMahasiswaStatus</strong>: Get data visualization for students' status (active, inactive).</li>
    <pre><code>$response = $api->getDataMahasiswaStatus();

dd($response);</code></pre>

    <li><strong>getDataPtBentuk</strong>: Get data visualization for universities' types.</li>
    <pre><code>$response = $api->getDataPtBentuk();

dd($response);</code></pre>

    <li><strong>getDataPtAkreditasi</strong>: Get data visualization for universities' accreditation levels.</li>
    <pre><code>$response = $api->getDataPtAkreditasi();

dd($response);</code></pre>

    <li><strong>getDataPtKelompokPembina</strong>: Get data visualization for universities' administrative overseer groups.</li>
    <pre><code>$response = $api->getDataPtKelompokPembina();

dd($response);</code></pre>

    <li><strong>getDataPtProvinsi</strong>: Get data visualization for universities by province.</li>
    <pre><code>$response = $api->getDataPtProvinsi();

dd($response);</code></pre>

    <li><strong>getDataProdiJenjang</strong>: Get data visualization for academic programs by level.</li>
    <pre><code>$response = $api->getDataProdiJenjang();

dd($response);</code></pre>

    <li><strong>getDataProdiAkreditasi</strong>: Get data visualization for academic programs by accreditation.</li>
    <pre><code>$response = $api->getDataProdiAkreditasi();

dd($response);</code></pre>

    <li><strong>getDataProdiBidangIlmu</strong>: Get data visualization for academic programs by field of study.</li>
    <pre><code>$response = $api->getDataProdiBidangIlmu();

dd($response);</code></pre>

    <li><strong>getDataProdiKelompokPembina</strong>: Get data visualization for academic programs grouped by administrative overseer.</li>
    <pre><code>$response = $api->getDataProdiKelompokPembina();

dd($response);</code></pre>

    <li><strong>getContributor</strong>: Get the list of contributors.</li>
    <pre><code>$response = $api->getContributor();

dd($response);</code></pre>

    <li><strong>getNews</strong>: Get the list of news articles.</li>
    <pre><code>$response = $api->getNews();

dd($response);</code></pre>

    <li><strong>getBidangIlmuProdi</strong>: Get the field of sciences.</li>
    <pre><code>$response = $api->getBidangIlmuProdi();

dd($response);</code></pre>

</ul>

</body>
</html>
