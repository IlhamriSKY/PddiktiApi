PDDIKTI API Laravel Package
===========================

This Laravel package integrates with the PDDIKTI API, providing easy access to university, lecturer, and student data.

Installation
------------

To install this package, follow these steps:

1.  Add the package to your Laravel project using Composer:

    ```bash
    composer require ilhamrisky/pddiktiapi
    ```

2. Once installed, you can start using the `Api` class to interact with the PDDIKTI API. Here's an example of how to use the package: 

    ```php
    use IlhamriSKY\PddiktiApi\Api;

    $pddikti = new Api();

    $response = $pddikti->searchAll('Ilham');
    ```

Available Methods
-----------------

The following methods are available in the API class:

*   **searchAll**: Search all categories by keyword.

    ```php
    $response = $api->searchAll('keyword');
    dd($response);
    ```

*   **searchMahasiswa**: Search for students by keyword.
    ```php
    $response = $api->searchMahasiswa('student name');
    dd($response);
    ```

*   **searchDosen**: Search for lecturers by keyword.
    ```php
    $response = $api->searchDosen('lecturer name');

    dd($response);
    ```


*   **searchPt**: Search for universities by keyword.
    ```php
    $response = $api->searchPt('university name');
    dd($response);
    ```

*   **searchProdi**: Search for study programs by keyword.
    ```php
    $response = $api->searchProdi('study program name');
    dd($response);
    ```

*   **getDetailMahasiswa**: Get detailed information of a student by ID.
    ```php
    $response = $api->getDetailMahasiswa('student-id');
    dd($response);
    ```

*   **getDosenProfile**: Get profile of a lecturer by ID.

    ```php
    $response = $api->getDosenProfile('lecturer-id');
    dd($response);
    ```

*   **getDosenPenelitian**: Get research activities of a lecturer by ID.

    ```php
    $response = $api->getDosenPenelitian('lecturer-id');
    dd($response);
    ```

*   **getDosenPengabdian**: Get community service activities of a lecturer by ID.

    ```php
    $response = $api->getDosenPengabdian('lecturer-id');
    dd($response);
    ```

*   **getDosenKarya**: Get academic works of a lecturer by ID.

    ```php
    $response = $api->getDosenKarya('lecturer-id');
    dd($response);
    ```

*   **getDosenPaten**: Get patents of a lecturer by ID.

    ```php
    $response = $api->getDosenPaten('lecturer-id');
    dd($response);
    ```

*   **getDosenStudyHistory**: Get study history of a lecturer by ID.

    ```php
    $response = $api->getDosenStudyHistory('lecturer-id');
    dd($response);
    ```

*   **getDosenTeachingHistory**: Get teaching history of a lecturer by ID.

    ```php
    $response = $api->getDosenTeachingHistory('lecturer-id');
    dd($response);
    ```

*   **getDetailPt**: Get detailed information of a university by ID.

    ```php
    $response = $api->getDetailPt('university-id');
    dd($response);
    ```

*   **getProdiPt**: Get study programs of a university by ID and year.

    ```php
    $response = $api->getProdiPt('university-id', 2023);
    dd($response);
    ```

*   **getLogoPt**: Get the logo of a university by ID.

    ```php
    $response = $api->getLogoPt('university-id');
    dd($response);
    ```

*   **getRasioPt**: Get lecturer-student ratio of a university by ID.

    ```php
    $response = $api->getRasioPt('university-id');
    dd($response);
    ```

*   **getMahasiswaPt**: Get students of a university by ID.

    ```php
    $response = $api->getMahasiswaPt('university-id');
    dd($response);
    ```

*   **getWaktuStudiPt**: Get study time of a university by ID.

    ```php
    $response = $api->getWaktuStudiPt('university-id');
    dd($response);
    ```

*   **getNameHistoriesPt**: Get name history of a university by ID.

    ```php
    $response = $api->getNameHistoriesPt('university-id');
    dd($response);
    ```

*   **getCostRangePt**: Get cost range of a university by ID.

    ```php
    $response = $api->getCostRangePt('university-id');
    dd($response);
    ```

*   **getGraduationRatePt**: Get graduation rate of a university by ID.

    ```php
    $response = $api->getGraduationRatePt('university-id');
    dd($response);
    ```

*   **getJumlahProdiPt**: Get the number of study programs of a university by ID.

    ```php
    $response = $api->getJumlahProdiPt('university-id');
    dd($response);
    ```

*   **getJumlahMahasiswaPt**: Get the number of students of a university by ID.

    ```php
    $response = $api->getJumlahMahasiswaPt('university-id');
    dd($response);
    ```

*   **getJumlahDosenPt**: Get the number of lecturers of a university by ID.

    ```php
    $response = $api->getJumlahDosenPt('university-id');
    dd($response);
    ```

*   **getSarprasFileNamePt**: Get the file name of sarpras of a university by ID.

    ```php
    $response = $api->getSarprasFileNamePt('university-id');
    dd($response);
    ```

*   **getSarprasBlobPt**: Get the sarpras blob of a university by ID.

    ```php
    $response = $api->getSarprasBlobPt('university-id');
    dd($response);
    ```

*   **getDetailProdi**: Get detailed information of a study program by ID.

    ```php
    $response = $api->getDetailProdi('study-program-id');
    dd($response);
    ```

*   **getDescProdi**: Get description of a study program by ID.

    ```php
    $response = $api->getDescProdi('study-program-id');
    dd($response);
    ```

*   **getNameHistoriesProdi**: Get name history of a study program by ID.

    ```php
    $response = $api->getNameHistoriesProdi('study-program-id');
    dd($response);
    ```

*   **getNumStudentsLecturersProdi**: Get the number of students and lecturers in a study program by ID.

    ```php
    $response = $api->getNumStudentsLecturersProdi('study-program-id');
    dd($response);
    ```

*   **getCostRangeProdi**: Get the cost range of a study program by ID.

    ```php
    $response = $api->getCostRangeProdi('study-program-id');
    dd($response);
    ```

*   **getDayaTampungProdi**: Get the capacity of a study program by ID.

    ```php
    $response = $api->getDayaTampungProdi('study-program-id');
    dd($response);
    ```

*   **getRasioDosenMahasiswaProdi**: Get lecturer-student ratio of a study program by ID.

    ```php
    $response = $api->getRasioDosenMahasiswaProdi('study-program-id');
    dd($response);
    ```

*   **getGraduationRateProdi**: Get the graduation rate of a study program by ID.

    ```php
    $response = $api->getGraduationRateProdi('study-program-id');
    dd($response);
    ```

*   **getLogoProdi**: Get the logo of a study program by ID.

    ```php
    $response = $api->getLogoProdi('study-program-id');
    dd($response);
    ```

*   **getHomebaseProdi**: Get the homebase ratio of a study program by ID and academic year.

    ```php
    $response = $api->getHomebaseProdi('study-program-id', 2023);
    dd($response);
    ```

*   **getPenghitungRatioProdi**: Get the ratio counter of a study program by ID and academic year.

    ```php
    $response = $api->getPenghitungRatioProdi('study-program-id', 2023);
    dd($response);
    ```

*   **getDosenCountActive**: Get active lecturer count.

    ```php
    $response = $api->getDosenCountActive();
    dd($response);
    ```

*   **getMahasiswaCountActive**: Get active student count.

    ```php
    $response = $api->getMahasiswaCountActive();
    dd($response);
    ```

*   **getProdiCount**: Get the count of study programs.

    ```php
    $response = $api->getProdiCount();
    dd($response);
    ```

*   **getPtCount**: Get the count of universities.

    ```php
    $response = $api->getPtCount();
    dd($response);
    ```

*   **getDataDosenKeaktifan**: Get data visualization for lecturers' activeness.

    ```php
    $response = $api->getDataDosenKeaktifan();
    dd($response);
    ```

*   **getDataDosenBidang**: Get data visualization for lecturers' fields of study.

    ```php
    $response = $api->getDataDosenBidang();
    dd($response);
    ```

*   **getDataDosenJenisKelamin**: Get data visualization for lecturers' gender distribution.

    ```php
    $response = $api->getDataDosenJenisKelamin();
    dd($response);
    ```

*   **getDataDosenJenjang**: Get data visualization for lecturers' academic levels.

    ```php
    $response = $api->getDataDosenJenjang();
    dd($response);
    ```

*   **getDataDosenIkatan**: Get data visualization for lecturers' employment binding.

    ```php
    $response = $api->getDataDosenIkatan();
    dd($response);
    ```

*   **getDataMahasiswaBidang**: Get data visualization for students' fields of study.

    ```php
    $response = $api->getDataMahasiswaBidang();
    dd($response);
    ```

*   **getDataMahasiswaJenisKelamin**: Get data visualization for students' gender distribution.

    ```php
    $response = $api->getDataMahasiswaJenisKelamin();
    dd($response);
    ```

*   **getDataMahasiswaJenjang**: Get data visualization for students by educational level.

    ```php
    $response = $api->getDataMahasiswaJenjang();
    dd($response);
    ```

*   **getDataMahasiswaKelompokLembaga**: Get data visualization for students based on institutional groups.

    ```php
    $response = $api->getDataMahasiswaKelompokLembaga();
    dd($response);
    ```

*   **getDataMahasiswaStatus**: Get data visualization for students' status (active, inactive).

    ```php
    $response = $api->getDataMahasiswaStatus();
    dd($response);
    ```

*   **getDataPtBentuk**: Get data visualization for universities' types.

    ```php
    $response = $api->getDataPtBentuk();
    dd($response);
    ```

*   **getDataPtAkreditasi**: Get data visualization for universities' accreditation levels.

    ```php
    $response = $api->getDataPtAkreditasi();
    dd($response);
    ```

*   **getDataPtKelompokPembina**: Get data visualization for universities' administrative overseer groups.

    ```php
    $response = $api->getDataPtKelompokPembina();
    dd($response);
    ```

*   **getDataPtProvinsi**: Get data visualization for universities by province.

    ```php
    $response = $api->getDataPtProvinsi();
    dd($response);
    ```

*   **getDataProdiJenjang**: Get data visualization for academic programs by level.

    ```php
    $response = $api->getDataProdiJenjang();
    dd($response);
    ```

*   **getDataProdiAkreditasi**: Get data visualization for academic programs by accreditation.

    ```php
    $response = $api->getDataProdiAkreditasi();
    dd($response);
    ```

*   **getDataProdiBidangIlmu**: Get data visualization for academic programs by field of study.

    ```php
    $response = $api->getDataProdiBidangIlmu();
    dd($response);
    ```

*   **getDataProdiKelompokPembina**: Get data visualization for academic programs grouped by administrative overseer.

    ```php
    $response = $api->getDataProdiKelompokPembina();
    dd($response);
    ```

*   **getContributor**: Get the list of contributors.

    ```php
    $response = $api->getContributor();
    dd($response);
    ```

*   **getNews**: Get the list of news articles.

    ```php
    $response = $api->getNews();
    dd($response);
    ```

*   **getBidangIlmuProdi**: Get the field of sciences.

    ```php
    $response = $api->getBidangIlmuProdi();
    dd($response);
    ```