<?= $this->extend('component/layout') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="css/stylecontact.css">

<div class="container">
    <div class="row">
        <div class="col">

            <h1>Contact</h1>

            <table>
                <tr>
                    <td>
                        <h2>SMK Bina Nusantara Ungaran</h2>
                        <p>Jl. Kisarino Mangunpranoto No.5, Bandarjo, Ungaran, Kec. Ungaran Bar., Kabupaten Semarang, Jawa Tengah 50517</p>
                    </td>
                    <td>
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=smk%20bina%20nusantara%20ungaran&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com"></a><br>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 300px;
                                        width: 400px;
                                        margin-bottom: 50px;
                                    }
                                </style><a href="https://www.embedgooglemap.net">google maps websites</a>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 300px;
                                        width: 400px;
                                    }
                                </style>
                            </div>
                        </div>
                    </td>

                </tr>
            </table>


        </div>
    </div>
</div>

<?= $this->endSection() ?>