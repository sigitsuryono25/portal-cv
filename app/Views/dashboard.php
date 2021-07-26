<div class="box">
    <div class="box-header with-border border-danger">
        <h3 class="box-title">Personal Information</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-3 col-12 text-center">
                <div style="display: flex; justify-content: center; align-items: center;">
                    <div id="photo-preview" style="width: 250px; height: 250px; 
                    background-image: url('<?= $info['gambar'] ?>');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;"></div>
                </div>
            </div>
            <div class="col-md-9 col-12">
                <div class="form-group">
                    <label for="nama">Name</label><br>
                    <span><?= (!empty($info['nama'])) ? $info['nama'] : "" ?></span>
                </div>
                <div class="form-group">
                    <label for="descriptions">Short Description About You</label><br>
                    <span><?= (!empty($info['descriptions'])) ? $info['descriptions'] : "" ?></span>
                </div>
                <div class="form-group">
                    <label for="alamat">Address</label><br>
                    <span><?= (!empty($info['alamat'])) ? $info['alamat'] : "" ?></span>
                </div>
                <div class="form-group">
                    <label for="telepon">Phone</label><br>
                    <span><?= (!empty($info['telepon'])) ? $info['telepon'] : "" ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label><br>
                    <span><?= (!empty($info['email'])) ? $info['email'] : "" ?></span>
                </div>
                <div class="form-group">
                    <label for="kebangsaan">Nationality</label><br>
                    <span><?= (!empty($info['kebangsaan'])) ? $info['kebangsaan'] : "" ?></span>
                </div>
                <div class="form-group">
                    <label for="ttl">Date of Birth</label><br>
                    <span><?= (!empty($info['ttl'])) ? $info['ttl'] : "" ?></span>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <p><?= $info['gender'] ?></p>
                </div>
                <div class="form-group">
                    <label for="tentang">Current Job</label><br>
                    <span><?= (!empty($info['tentang'])) ? $info['tentang'] : "" ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box">
    <div class="box-header with-border border-danger">
        <h3 class="box-title">Education and Training</h3>
    </div>
    <div class="box-body">
        <div id="form-education">
            <?php if (!empty($info['education'])) {
                foreach ($info['education'] as $key => $value) {

            ?>
                    <div class="row" id="<?= $key ?>">
                        <div class="form-group col-md-12">
                            <label for="qualification-awarded">Qualification Awarded</label><br>
                            <span><?= $value->qualification ?></span>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="principal-studies">Principal Studies</label><br>
                            <span><?= $value->principal_studies ?></span>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="institution">Institution</label><br>
                            <span><?= $value->institution ?></span>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="year">Year</label><br>
                            <span><?= $value->year ?></span>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <div class="row">
                    <div class="form-group col-md-3 col-12">
                        <label for="qualification-awarded">Qualification Awarded</label>
                        <input type="text" name="qualification[]" id="qualification-awarded" class="form-control" required>
                    </div>
                    <div class="form-group col-md-3 col-12">
                        <label for="principal-studies">Principal Studies</label>
                        <input type="text" name="principal_studies[]" id="principal-studies" class="form-control" required>
                    </div>
                    <div class="form-group col-md-3 col-12">
                        <label for="institution">Institution</label>
                        <input type="text" name="institution[]" id="institution" class="form-control" required>
                    </div>
                    <div class="form-group col-md-3 col-12">
                        <label for="year">Year</label>
                        <input type="number" name="year[]" id="year" class="form-control" required>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="box">
    <div class="box-header with-border border-danger">
        <h3 class="box-title">Skill and Competences</h3>
    </div>
    <div class="box-body">
        <div id="form-skils">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="programming-language">Skills: </label><br>
                        <span><?= (!empty($info['skill']->programming_lang)) ? $info['skill']->programming_lang : "" ?></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="mobile-plat">Mobile Platforms: </label><br>
                        <span><?= (!empty($info['skill']->mobile_platforms)) ? $info['skill']->mobile_platforms : "" ?></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="os">Operating Systems: </label><br>
                        <span><?= (!empty($info['skill']->os)) ? $info['skill']->os : "" ?></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="database">Database: </label><br>
                        <span><?= (!empty($info['skill']->database)) ? $info['skill']->database : "" ?></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="framework">Framework: </label><br>
                        <span><?= (!empty($info['skill']->framework)) ? $info['skill']->framework : "" ?></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="ide">IDE/Text Editor: </label><br>
                        <span><?= (!empty($info['skill']->ide)) ? $info['skill']->ide : "" ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box">
    <div class="box-header with-border border-danger">
        <h3 class="box-title">Project and Experiences</h3>
        <div class="box-tools pull-right">
            <a href="javascript:void(0)" class="appendInputProject-btn btn btn-sm btn-flat btn-success">
                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                Tambah Inputan
            </a>
        </div>
    </div>
    <div class="box-body">
        <div id="project-content">
            <?php if (!empty($info['project'])) {
                foreach ($info['project'] as $key => $vv) { ?>
                    <div class="row" id="<?= $key ?>">
                        <div class="form-group col-md-12">
                            <label for="project">Project Name</label><br>
                            <span><?= $vv->project ?></span>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="institution-project">Institution</label><br>
                            <span><?= $vv->institution ?></span>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="platform">Platform</label><br>
                            <span><?= $vv->platform ?></span>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="year-project">Year</label><br>
                            <span><?= $vv->year ?></span>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="url">Product URL</label><br>
                            <span><?= $vv->url ?></span>
                        </div>
                    </div>
                <?php
                }
            } else { ?>
                <div class="row">
                    <div class="form-group col-12">
                        <label for="project">Project Name</label>
                        <input type="text" name="project[]" id="project" class="form-control" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="institution-project">Institution</label>
                        <input type="text" name="institution[]" id="institution-project" class="form-control" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="platform">Platform</label>
                        <input type="text" name="platform[]" id="platform" class="form-control" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="year-project">Year</label>
                        <input type="number" name="year[]" id="year-project" class="form-control" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="url">Product URL</label>
                        <input type="url" name="url[]" id="url" class="form-control" required>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("input").prop("readonly", true).css("border", "0px").css("background", "transparent");
        $("textarea").prop("readonly", true).css("border", "0px").css("background", "transparent");
    })
</script>