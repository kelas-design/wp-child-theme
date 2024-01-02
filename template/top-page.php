<?php
/**
 * Template Name: Top Page
 */
get_header();
?>

<div class="container">
    <div class="col-6 mx-auto my-5">
        <div class="alert alert-success"
            style="border: 1px dashed grey;">
            <span>Selamat datang ke SM WordPress SandBox</span>

            <hr>

            <p>
                Website ringkas ini dibangunkan dengan harapan anda boleh mengenali WordPress, mencuba versi WordPress
                terbaru, Debug WordPress dan pelbagai lagi.
            </p>

            <p>
                Anda tidak perlu untuk Daftar atau Login untuk menggunakannya. Tetapi anda perlu untuk memilih salah
                satu atau semua pilihan dibawah untuk membuatkan Sandbox ini lebih dinamik. Anda boleh remove Theme @
                Plugin bila-bila masa didalam Sandbox ini nanti. <span class="text-danger">Jika Sandbox tidak load
                    page, anda diminta untuk tekan
                    butang "Back" dah pilih versi WordPress @ PHP yang lain</span>
            </p>

            <p>
                <b> Perhatian: </b> Website ini adalah website SandBox. Jadi sila gunakan hanya untuk menguji-cuba.
                Bukan untuk
                production @ live. SandBox juga mungkin akan bertindak lambat kerana trafik yang tinggi.
            </p>
        </div>

        <form action="/sandbox"
            method="POST">
            <div class="first row mt-5">
                <div class="col-6">
                    <label for="theme"
                        class="form-label">Pilih Theme</label>
                    <select name="theme"
                        id="theme"
                        class="form-select text-muted">
                        <option value="astra">Astra</option>
                        <option value="generatepress">GeneratePress</option>
                        <option value="beaver-builder-lite-version">Beaver Builder</option>
                    </select>
                </div>

                <div class="col-6">
                    <label for="theme"
                        class="form-label">Pilih Plugin</label>
                    <select name="plugin"
                        id="plugin"
                        class="form-select text-muted">
                        <option value="sm-prefetch">SM Prefetch</option>
                        <option value="sm-scrollbar">SM Scrollbar</option>
                    </select>
                </div>
            </div>

            <div class="second row mt-3 mb-5">
                <div class="col-6">
                    <label for="wpversion"
                        class="form-label">Pilih versi WordPress</label>
                    <select name="wpversion"
                        id="wpversion"
                        class="form-select text-muted">
                        <option value="6.2">6.2</option>
                        <option value="6.3">6.3</option>
                        <option value="latest">latest</option>
                    </select>
                </div>

                <div class="col-6">
                    <label for="phpversion"
                        class="form-label">Pilih versi PHP</label>
                    <select name="phpversion"
                        id="phpversion"
                        class="form-select text-muted">
                        <option value="7.4">7.4</option>
                        <option value="8.0">8.0</option>
                        <option value="8.1">8.1</option>
                        <option value="8.2">8.2</option>
                    </select>
                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-primary"
                    type="submit"
                    id="btn-submit">Buka WordPress Sandbox</button>
                <div class="form-text mt-3">version 1.1</div>
            </div>
        </form>
    </div>
</div>