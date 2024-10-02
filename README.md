PDDIKTI API Laravel Package
===========================

[![Latest Version on Packagist](https://img.shields.io/packagist/v/IlhamriSKY/PddiktiApi.svg?style=flat-square)](https://packagist.org/packages/IlhamriSKY/PddiktiApi)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/IlhamriSKY/PddiktiApi.svg?style=flat-square)](https://packagist.org/packages/IlhamriSKY/PddiktiApi)

This Laravel package integrates with the **PDDIKTI (Pangkalan Data Pendidikan Tinggi)** API, providing easy access to university, lecturer, and student data. This package is an unofficial API built by the community, utilizing web scraping and API wrapping methods from the PDDIKTI web platform to offer programmatic access to the data.

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

    $pddiktiapi = new Api();

    $response = $pddiktiapi->searchAll('Ilham');
    ```

Available Methods
-----------------

The following methods are available in the API class:

*   **searchAll**: Search all categories by keyword.

    ```php
    $response = $pddiktiapi->searchAll('keyword');
    dd($response);
    ```

*   **searchMahasiswa**: Search for students by keyword.
    ```php
    $response = $pddiktiapi->searchMahasiswa('student name');
    dd($response);
    ```

*   **searchDosen**: Search for lecturers by keyword.
    ```php
    $response = $pddiktiapi->searchDosen('lecturer name');

    dd($response);
    ```


*   **searchPt**: Search for universities by keyword.
    ```php
    $response = $pddiktiapi->searchPt('university name');
    dd($response);
    ```

*   **searchProdi**: Search for study programs by keyword.
    ```php
    $response = $pddiktiapi->searchProdi('study program name');
    dd($response);
    ```

*   **getDetailMahasiswa**: Get detailed information of a student by ID.
    ```php
    $response = $pddiktiapi->getDetailMahasiswa('student-id');
    dd($response);
    ```

*   **getDosenProfile**: Get profile of a lecturer by ID.

    ```php
    $response = $pddiktiapi->getDosenProfile('lecturer-id');
    dd($response);
    ```

*   **getDosenPenelitian**: Get research activities of a lecturer by ID.

    ```php
    $response = $pddiktiapi->getDosenPenelitian('lecturer-id');
    dd($response);
    ```

*   **getDosenPengabdian**: Get community service activities of a lecturer by ID.

    ```php
    $response = $pddiktiapi->getDosenPengabdian('lecturer-id');
    dd($response);
    ```

*   **getDosenKarya**: Get academic works of a lecturer by ID.

    ```php
    $response = $pddiktiapi->getDosenKarya('lecturer-id');
    dd($response);
    ```

*   **getDosenPaten**: Get patents of a lecturer by ID.

    ```php
    $response = $pddiktiapi->getDosenPaten('lecturer-id');
    dd($response);
    ```

*   **getDosenStudyHistory**: Get study history of a lecturer by ID.

    ```php
    $response = $pddiktiapi->getDosenStudyHistory('lecturer-id');
    dd($response);
    ```

*   **getDosenTeachingHistory**: Get teaching history of a lecturer by ID.

    ```php
    $response = $pddiktiapi->getDosenTeachingHistory('lecturer-id');
    dd($response);
    ```

*   **getDetailPt**: Get detailed information of a university by ID.

    ```php
    $response = $pddiktiapi->getDetailPt('university-id');
    dd($response);
    ```

*   **getProdiPt**: Get study programs of a university by ID and year.

    ```php
    $response = $pddiktiapi->getProdiPt('university-id', 2023);
    dd($response);
    ```

*   **getLogoPt**: Get the logo of a university by ID.

    ```php
    $response = $pddiktiapi->getLogoPt('university-id');
    dd($response);
    ```

*   **getRasioPt**: Get lecturer-student ratio of a university by ID.

    ```php
    $response = $pddiktiapi->getRasioPt('university-id');
    dd($response);
    ```

*   **getMahasiswaPt**: Get students of a university by ID.

    ```php
    $response = $pddiktiapi->getMahasiswaPt('university-id');
    dd($response);
    ```

*   **getWaktuStudiPt**: Get study time of a university by ID.

    ```php
    $response = $pddiktiapi->getWaktuStudiPt('university-id');
    dd($response);
    ```

*   **getNameHistoriesPt**: Get name history of a university by ID.

    ```php
    $response = $pddiktiapi->getNameHistoriesPt('university-id');
    dd($response);
    ```

*   **getCostRangePt**: Get cost range of a university by ID.

    ```php
    $response = $pddiktiapi->getCostRangePt('university-id');
    dd($response);
    ```

*   **getGraduationRatePt**: Get graduation rate of a university by ID.

    ```php
    $response = $pddiktiapi->getGraduationRatePt('university-id');
    dd($response);
    ```

*   **getJumlahProdiPt**: Get the number of study programs of a university by ID.

    ```php
    $response = $pddiktiapi->getJumlahProdiPt('university-id');
    dd($response);
    ```

*   **getJumlahMahasiswaPt**: Get the number of students of a university by ID.

    ```php
    $response = $pddiktiapi->getJumlahMahasiswaPt('university-id');
    dd($response);
    ```

*   **getJumlahDosenPt**: Get the number of lecturers of a university by ID.

    ```php
    $response = $pddiktiapi->getJumlahDosenPt('university-id');
    dd($response);
    ```

*   **getSarprasFileNamePt**: Get the file name of sarpras of a university by ID.

    ```php
    $response = $pddiktiapi->getSarprasFileNamePt('university-id');
    dd($response);
    ```

*   **getSarprasBlobPt**: Get the sarpras blob of a university by ID.

    ```php
    $response = $pddiktiapi->getSarprasBlobPt('university-id');
    dd($response);
    ```

*   **getDetailProdi**: Get detailed information of a study program by ID.

    ```php
    $response = $pddiktiapi->getDetailProdi('study-program-id');
    dd($response);
    ```

*   **getDescProdi**: Get description of a study program by ID.

    ```php
    $response = $pddiktiapi->getDescProdi('study-program-id');
    dd($response);
    ```

*   **getNameHistoriesProdi**: Get name history of a study program by ID.

    ```php
    $response = $pddiktiapi->getNameHistoriesProdi('study-program-id');
    dd($response);
    ```

*   **getNumStudentsLecturersProdi**: Get the number of students and lecturers in a study program by ID.

    ```php
    $response = $pddiktiapi->getNumStudentsLecturersProdi('study-program-id');
    dd($response);
    ```

*   **getCostRangeProdi**: Get the cost range of a study program by ID.

    ```php
    $response = $pddiktiapi->getCostRangeProdi('study-program-id');
    dd($response);
    ```

*   **getDayaTampungProdi**: Get the capacity of a study program by ID.

    ```php
    $response = $pddiktiapi->getDayaTampungProdi('study-program-id');
    dd($response);
    ```

*   **getRasioDosenMahasiswaProdi**: Get lecturer-student ratio of a study program by ID.

    ```php
    $response = $pddiktiapi->getRasioDosenMahasiswaProdi('study-program-id');
    dd($response);
    ```

*   **getGraduationRateProdi**: Get the graduation rate of a study program by ID.

    ```php
    $response = $pddiktiapi->getGraduationRateProdi('study-program-id');
    dd($response);
    ```

*   **getLogoProdi**: Get the logo of a study program by ID.

    ```php
    $response = $pddiktiapi->getLogoProdi('study-program-id');
    dd($response);
    ```

*   **getHomebaseProdi**: Get the homebase ratio of a study program by ID and academic year.

    ```php
    $response = $pddiktiapi->getHomebaseProdi('study-program-id', 2023);
    dd($response);
    ```

*   **getPenghitungRatioProdi**: Get the ratio counter of a study program by ID and academic year.

    ```php
    $response = $pddiktiapi->getPenghitungRatioProdi('study-program-id', 2023);
    dd($response);
    ```

*   **getDosenCountActive**: Get active lecturer count.

    ```php
    $response = $pddiktiapi->getDosenCountActive();
    dd($response);
    ```

*   **getMahasiswaCountActive**: Get active student count.

    ```php
    $response = $pddiktiapi->getMahasiswaCountActive();
    dd($response);
    ```

*   **getProdiCount**: Get the count of study programs.

    ```php
    $response = $pddiktiapi->getProdiCount();
    dd($response);
    ```

*   **getPtCount**: Get the count of universities.

    ```php
    $response = $pddiktiapi->getPtCount();
    dd($response);
    ```

*   **getDataDosenKeaktifan**: Get data visualization for lecturers' activeness.

    ```php
    $response = $pddiktiapi->getDataDosenKeaktifan();
    dd($response);
    ```

*   **getDataDosenBidang**: Get data visualization for lecturers' fields of study.

    ```php
    $response = $pddiktiapi->getDataDosenBidang();
    dd($response);
    ```

*   **getDataDosenJenisKelamin**: Get data visualization for lecturers' gender distribution.

    ```php
    $response = $pddiktiapi->getDataDosenJenisKelamin();
    dd($response);
    ```

*   **getDataDosenJenjang**: Get data visualization for lecturers' academic levels.

    ```php
    $response = $pddiktiapi->getDataDosenJenjang();
    dd($response);
    ```

*   **getDataDosenIkatan**: Get data visualization for lecturers' employment binding.

    ```php
    $response = $pddiktiapi->getDataDosenIkatan();
    dd($response);
    ```

*   **getDataMahasiswaBidang**: Get data visualization for students' fields of study.

    ```php
    $response = $pddiktiapi->getDataMahasiswaBidang();
    dd($response);
    ```

*   **getDataMahasiswaJenisKelamin**: Get data visualization for students' gender distribution.

    ```php
    $response = $pddiktiapi->getDataMahasiswaJenisKelamin();
    dd($response);
    ```

*   **getDataMahasiswaJenjang**: Get data visualization for students by educational level.

    ```php
    $response = $pddiktiapi->getDataMahasiswaJenjang();
    dd($response);
    ```

*   **getDataMahasiswaKelompokLembaga**: Get data visualization for students based on institutional groups.

    ```php
    $response = $pddiktiapi->getDataMahasiswaKelompokLembaga();
    dd($response);
    ```

*   **getDataMahasiswaStatus**: Get data visualization for students' status (active, inactive).

    ```php
    $response = $pddiktiapi->getDataMahasiswaStatus();
    dd($response);
    ```

*   **getDataPtBentuk**: Get data visualization for universities' types.

    ```php
    $response = $pddiktiapi->getDataPtBentuk();
    dd($response);
    ```

*   **getDataPtAkreditasi**: Get data visualization for universities' accreditation levels.

    ```php
    $response = $pddiktiapi->getDataPtAkreditasi();
    dd($response);
    ```

*   **getDataPtKelompokPembina**: Get data visualization for universities' administrative overseer groups.

    ```php
    $response = $pddiktiapi->getDataPtKelompokPembina();
    dd($response);
    ```

*   **getDataPtProvinsi**: Get data visualization for universities by province.

    ```php
    $response = $pddiktiapi->getDataPtProvinsi();
    dd($response);
    ```

*   **getDataProdiJenjang**: Get data visualization for academic programs by level.

    ```php
    $response = $pddiktiapi->getDataProdiJenjang();
    dd($response);
    ```

*   **getDataProdiAkreditasi**: Get data visualization for academic programs by accreditation.

    ```php
    $response = $pddiktiapi->getDataProdiAkreditasi();
    dd($response);
    ```

*   **getDataProdiBidangIlmu**: Get data visualization for academic programs by field of study.

    ```php
    $response = $pddiktiapi->getDataProdiBidangIlmu();
    dd($response);
    ```

*   **getDataProdiKelompokPembina**: Get data visualization for academic programs grouped by administrative overseer.

    ```php
    $response = $pddiktiapi->getDataProdiKelompokPembina();
    dd($response);
    ```

*   **getContributor**: Get the list of contributors.

    ```php
    $response = $pddiktiapi->getContributor();
    dd($response);
    ```

*   **getNews**: Get the list of news articles.

    ```php
    $response = $pddiktiapi->getNews();
    dd($response);
    ```

*   **getBidangIlmuProdi**: Get the field of sciences.

    ```php
    $response = $pddiktiapi->getBidangIlmuProdi();
    dd($response);
    ```