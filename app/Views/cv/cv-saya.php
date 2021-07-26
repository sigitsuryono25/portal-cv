<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title><?= $title ?></title>
    <style>
        @media print {

            .no-print,
            .no-print * {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <div class="container p-4 bordered">
        <div class="no-print mb-3 bordered">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8 col-12 pt-2">
                    <p class="text-danger  text-center small font-weight-bold">Bila gambar/foto tidak muncul pada saat dicetak, ceklis background graphics (more options >> Background Graphics)</p>
                </div>
                <div class="col-md-3 col-12 text-center" >
                    <a class="btn btn-outline-secondary d-block d-md-inline btn-sm" onclick="window.print()">
                        <i class="fas fa-print"></i>&nbsp;&nbsp;&nbsp;
                        Cetak
                    </a>
                </div>
            </div>
        </div>
        <div class="header d-flex justify-content-start align-items-center">
            <div class="bg-warning" style="width: 22px; height: 22px;">&nbsp;</div>
            <div class="bg-danger" style="width: 22px; height: 22px;">&nbsp;</div>
            <div class="bg-primary" style="width: 22px; height: 22px;">&nbsp;</div>
            &nbsp;&nbsp;&nbsp;<h5>Curriculum Vitae</h5>
        </div>
        <div class="content">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <table class="table table-sm table-borderless">
                        <tr>
                            <td width="200px" class="text-right font-weight-bold border-bottom border-warning">Personal Information</td>
                            <td width="20px"></td>
                            <td width="300px">
                                <div id="photo-preview" class="rounded" style="width: 150px; height: 150px; 
                    background-image: url('<?= $info['gambar'] ?>');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;"></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right text-uppercase align-items-center font-weight-bold small pt-2">Name</td>
                            <td></td>
                            <td class="align-items-center"><span><?= $info['nama'] ?></span></td>
                        </tr>
                        <tr>
                            <td class="text-right text-uppercase font-weight-bold small pt-2">Address</td>
                            <td></td>
                            <td class="align-items-center"><span><?= $info['alamat'] ?></span></td>
                        </tr>
                        <tr>
                            <td class="text-right text-uppercase font-weight-bold small pt-2">Telephone</td>
                            <td></td>
                            <td class="align-items-center"><span><?= $info['telepon'] ?></span></td>
                        </tr>
                        <tr>
                            <td class="text-right text-uppercase font-weight-bold small pt-2">Email</td>
                            <td></td>
                            <td class="align-items-center"><span><?= $info['email'] ?></span></td>
                        </tr>
                        <tr>
                            <td class="text-right text-uppercase font-weight-bold small pt-2">Nationality</td>
                            <td></td>
                            <td class="align-items-center"><span><?= $info['kebangsaan'] ?></span></td>
                        </tr>
                        <tr>
                            <td class="text-right text-uppercase font-weight-bold small pt-2">Date of Birth</td>
                            <td></td>
                            <td class="align-items-center"><span><?= $info['ttl'] ?></span></td>
                        </tr>
                        <tr>
                            <td class="text-right text-uppercase font-weight-bold small pt-2">Gender</td>
                            <td></td>
                            <td class="align-items-center"><span><?= $info['gender'] ?></span></td>
                        </tr>
                        <tr>
                            <td class="text-right text-uppercase font-weight-bold small pt-2">Current Job</td>
                            <td></td>
                            <td class="align-items-center"><span><?= $info['tentang'] ?></span></td>
                        </tr>
                        <tr>
                            <td width="200px" class="text-right font-weight-bold pt-4">Education and Training</td>
                            <td width="20px"></td>
                            <td></td>
                        </tr>
                        <!-- Start Looping Here -->
                        <?php foreach ($info['education'] as $vv) { ?>
                            <tr>
                                <td class="text-right text-uppercase font-weight-bold small ">Year</td>
                                <td></td>
                                <td class="align-items-center"><span><?= $vv->year ?></span></td>
                            </tr>
                            <tr>
                                <td class="text-right text-uppercase font-weight-bold small pt-2">QUALIFICATION AWARDED</td>
                                <td></td>
                                <td class="align-items-center"><span><?= $vv->qualification ?></span></td>
                            </tr>
                            <tr>
                                <td class="text-right text-uppercase font-weight-bold small pt-2">PRINCIPAL STUDIES</td>
                                <td></td>
                                <td class="align-items-center"><span><?= $vv->principal_studies ?></span></td>
                            </tr>
                            <tr>
                                <td class="text-right text-uppercase font-weight-bold small pt-2">INSTITUTION</td>
                                <td></td>
                                <td class="align-items-center"><span><?= $vv->institution ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="p-3"></td>
                            </tr>
                        <?php } ?>
                        <!-- End Of Looping -->

                        <tr>
                            <td width="200px" class="text-right font-weight-bold pt-2 border-bottom border-danger">Skills and Competence</td>
                            <td width="20px"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td class="text-right text-uppercase font-weight-bold small">Skills</td>
                            <td></td>
                            <td class="align-items-center"><span><?= $info['skill']->programming_lang ?></span></td>
                        </tr>
                        <tr>
                            <td class="text-right text-uppercase font-weight-bold small">Mobile Platform</td>
                            <td></td>
                            <td class="align-items-center"><span><?= $info['skill']->mobile_platforms ?></span></td>
                        </tr>
                        <tr>
                            <td class="text-right text-uppercase font-weight-bold small">Operating System</td>
                            <td></td>
                            <td class="align-items-center"><span><?= $info['skill']->os ?></span></td>
                        </tr>
                        <tr>
                            <td class="text-right text-uppercase font-weight-bold small">Database</td>
                            <td></td>
                            <td class="align-items-center"><span><?= $info['skill']->database ?></span></td>
                        </tr>
                        <tr>
                            <td class="text-right text-uppercase font-weight-bold small">Framework</td>
                            <td></td>
                            <td class="align-items-center"><span><?= $info['skill']->framework ?></span></td>
                        </tr>
                        <tr>
                            <td class="text-right text-uppercase font-weight-bold small">Ide</td>
                            <td></td>
                            <td class="align-items-center"><span><?= $info['skill']->ide ?></span></td>
                        </tr>


                        <tr>
                            <td width="200px" class="text-right font-weight-bold pt-4 border-bottom border-primary">Project and Experiences</td>
                            <td width="20px"></td>
                            <td></td>
                        </tr>
                        <!-- Start Looping Here -->

                        <?php foreach ($info['project'] as $vpj) { ?>
                            <tr>
                                <td class="text-right text-uppercase font-weight-bold small pt-2">Year</td>
                                <td></td>
                                <td class="align-items-center"><span><?= $vpj->year ?></span></td>
                            </tr>
                            <tr>
                                <td class="text-right text-uppercase font-weight-bold small pt-2">Project</td>
                                <td></td>
                                <td class="align-items-center"><span><?= $vpj->project ?></span></td>
                            </tr>
                            <tr>
                                <td class="text-right text-uppercase font-weight-bold small pt-2">Platform</td>
                                <td></td>
                                <td class="align-items-center"><span><?= $vpj->platform ?></span></td>
                            </tr>
                            <tr>
                                <td class="text-right text-uppercase font-weight-bold small pt-2">INSTITUTION</td>
                                <td></td>
                                <td class="align-items-center"><span><?= $vpj->institution ?></span></td>
                            </tr>
                            <tr>
                                <td class="text-right text-uppercase font-weight-bold small pt-2">Product URL</td>
                                <td></td>
                                <td class="align-items-center"><span><?= $vpj->url ?></span></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="p-3"></td>
                            </tr>
                        <?php } ?>
                        <!-- End Of Looping -->
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>