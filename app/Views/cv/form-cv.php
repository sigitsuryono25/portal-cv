<div class="box">
    <div class="box-header with-border border-danger">
        <h3 class="box-title">Personal Information</h3>
    </div>
    <div class="box-body">
        <form action="<?= site_url('update-personal-info') ?>" id="formPersonalInfo">
            <div class="row">
                <div class="col-md-3 col-12 text-center">
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <div id="photo-preview" style="width: 250px; height: 250px; 
                    background-image: url('<?= $info['gambar'] ?>');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;"></div>
                    </div>
                    <!-- <img src="" alt="" class="img-fluid"> -->
                    <small class="text-danger margin-x-lg block"><strong>Ukuran gambar 250 X 250</strong></small>
                    <a href="javascript:void(0)" onclick="$('#image-pick').trigger('click')" class="text-center btn btn-block btn-flat btn-sm btn-warning">
                        Choose File...
                    </a>
                    <input type="file" id="image-pick" accept=".jpg, .png " onchange="loadFile(event)" class="hidden form-control-file">
                    <input type="hidden" name="gambar" value="<?= $info['gambar'] ?>">
                </div>
                <div class="col-md-9 col-12">
                    <div class="form-group">
                        <label for="nama">Name</label>
                        <input type="text" name="nama" value="<?= (!empty($info['nama'])) ? $info['nama'] : "" ?>" id="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="descriptions">Short Description About You</label>
                        <textarea name="descriptions" id="descriptions" class="form-control"><?= (!empty($info['descriptions'])) ? $info['descriptions'] : "" ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Address</label>
                        <textarea name="alamat" id="alamat" class="form-control"><?= (!empty($info['alamat'])) ? $info['alamat'] : "" ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Phone</label>
                        <input type="tel" name="telepon" value="<?= (!empty($info['telepon'])) ? $info['telepon'] : "" ?>" id="telepon" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?= (!empty($info['email'])) ? $info['email'] : "" ?>" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kebangsaan">Nationality</label>
                        <input type="text" name="kebangsaan" value="<?= (!empty($info['kebangsaan'])) ? $info['kebangsaan'] : "" ?>" id="kebangsaan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="ttl">Date of Birth</label>
                        <input type="date" name="ttl" value="<?= (!empty($info['ttl'])) ? $info['ttl'] : "" ?>" id="ttl" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="">--Please Choose One--</option>
                            <option value="Male" <?= (!empty($info['gender']) && $info['gender'] == "Male") ? "selected" : "" ?>>Male</option>
                            <option value="Female" <?= (!empty($info['gender']) && $info['gender'] == "Female") ? "selected" : "" ?>>Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tentang">Current Job</label>
                        <input type="text" name="tentang" value="<?= (!empty($info['tentang'])) ? $info['tentang'] : "" ?>" id="tentang" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-flat btn-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;
                            Simpan Data
                        </button>
                        <span class="status font-weight-bold"></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="box">
    <div class="box-header with-border border-danger d-md-">
        <h3 class="box-title">Education and Training</h3>
        <div class="box-tools pull-right">
            <a href="javascript:void(0)" class="appendInput-btn btn btn-sm btn-flat btn-success">
                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                Tambah Inputan
            </a>
        </div>
    </div>
    <div class="box-body">
        <form action="<?= site_url('update-education') ?>" id="formEducation">
            <div id="form-education">
                <?php if (!empty($info['education'])) {
                    foreach ($info['education'] as $key => $value) {

                ?>
                        <div class="row" id="<?= $key ?>">
                            <div class="form-group col-md-3 col-12">
                                <label for="qualification-awarded">Qualification Awarded</label>
                                <input type="text" name="qualification[]" value="<?= $value->qualification ?>" id="qualification-awarded-<?= $key ?>" class="form-control" required>
                            </div>
                            <div class="form-group col-md-3 col-12">
                                <label for="principal-studies">Principal Studies</label>
                                <input type="text" name="principal_studies[]" value="<?= $value->principal_studies ?>" id="principal-studies-<?= $key ?>" class="form-control" required>
                            </div>
                            <div class="form-group col-md-3 col-12">
                                <label for="institution">Institution</label>
                                <input type="text" name="institution[]" value="<?= $value->institution ?>" id="institution-<?= $key ?>" class="form-control" required>
                            </div>
                            <div class="form-group col-md-3 col-12">
                                <label for="year">Year</label>
                                <input type="number" name="year[]" value="<?= $value->year ?>" id="year-<?= $key ?>" class="form-control" required>
                            </div>
                            <?php if ($key > 0) { ?>
                                <div class="col-md-12 text-center">
                                    <a href="javascript:void(0)" class="small text-danger" onclick="removeAppend('<?= $key ?>')">Hapus Inputan</a>
                                </div>
                            <?php } ?>
                            <div class="col-md-12">
                                <hr>
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
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-flat btn-sm">
                    <i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;
                    Simpan Data
                </button>
                <span class="status-education font-weight-bold"></span>
            </div>
        </form>
    </div>
</div>

<div class="box">
    <div class="box-header with-border border-danger">
        <h3 class="box-title">Skill and Competences</h3>
    </div>
    <div class="box-body">
        <div class="callout callout-warning">
            <h4>Kalo nggak ada di pilihan, bisa tulis sendiri ya, dipisahkan dengan koma</h4>
        </div>
        <form action="<?= site_url('update-skills') ?>" id="formSkills">
            <div id="form-skils">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="programming-language">Skills</label>
                            <textarea name="programming_lang" id="programming-language" class="form-control" required><?= (!empty($info['skill']->programming_lang)) ? $info['skill']->programming_lang : "" ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <span class=""><strong>Popular Skills</strong></span><br>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Kotlin Programming</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Java Programming</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Swift Programming</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Javascript Programming</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Typescript Programming</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">SQL Programming</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Python Programming</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Dart Programming</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">C# Programming</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Visual Basic Programming</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">ASP Programming</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Digital Marketing</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Graphic Design</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Video Editing</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Animation</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">3D</span>
                    </div>
                </div>
                <hr>
                <div class="row margin-top-lg">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="mobile-plat">Mobile Platforms</label>
                            <textarea name="mobile_platforms" id="mobile-plat" class="form-control" required><?= (!empty($info['skill']->mobile_platforms)) ? $info['skill']->mobile_platforms : "" ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <span class=""><strong>Popular Mobile Platforms</strong></span><br>
                        <span class="badge btn bg-red" onclick="setinput(this, 'mobile-plat')">Android</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'mobile-plat')">iOS</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'mobile-plat')">Windows Phone</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'mobile-plat')">Blackberry OS</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'mobile-plat')">Tizen</span>
                    </div>
                </div>
                <hr>
                <div class="row margin-top-lg">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="os">Operating Systems</label>
                            <textarea name="os" id="os" class="form-control" required><?= (!empty($info['skill']->os)) ? $info['skill']->os : "" ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <span class=""><strong>Popular Operating Systems</strong></span><br>
                        <span class="badge btn bg-red" onclick="setinput(this, 'os')">Windows</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'os')">Andoid</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'os')">iOS</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'os')">Linux</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'os')">MacOS</span>
                    </div>
                </div>
                <hr>
                <div class="row margin-top-lg">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="database">Database</label>
                            <textarea name="database" id="database-in" class="form-control" required><?= (!empty($info['skill']->database)) ? $info['skill']->database : "" ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <span class=""><strong>Popular Database</strong></span><br>
                        <span class="badge btn bg-red" onclick="setinput(this, 'database-in')">MySQL</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'database-in')">Oracle</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'database-in')">PostgreeSQL</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'database-in')">SQL Server</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'database-in')">NoSQL</span>
                    </div>
                </div>
                <hr>
                <div class="row margin-top-lg">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="framework">Framework</label>
                            <textarea name="framework" id="framework" class="form-control" required><?= (!empty($info['skill']->framework)) ? $info['skill']->framework : "" ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <span class=""><strong>Popular Framework</strong></span><br>
                        <span class="badge btn bg-red" onclick="setinput(this, 'framework')">Flutter</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'framework')">Codeigniter 4</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'framework')">Codeigniter 3</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'framework')">Laravel</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'framework')">Xamarin.Form</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'framework')">Vue.JS</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'framework')">AngularJS</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'framework')">Symfony</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'framework')">CakePHP</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'framework')">Ktor</span>
                    </div>
                </div>
                <hr>
                <div class="row margin-top-lg">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="ide">IDE/Text Editor</label>
                            <textarea name="ide" id="ide" class="form-control" required><?= (!empty($info['skill']->ide)) ? $info['skill']->ide : "" ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <span class=""><strong>Popular IDE/Text Editor</strong></span><br>
                        <span class="badge btn bg-red" onclick="setinput(this, 'ide')">Visual Studio</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'ide')">Eclipse</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'ide')">Android Studio</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'ide')">Pycharm</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'ide')">Jetbrains</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'ide')">XCode</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'ide')">Netbeans</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'ide')">Php Storm</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'ide')">Visual Studio Code</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'ide')">Sublime</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'ide')">Dreamweaver</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'ide')">Datagrip</span>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group margin-top-lg">
                <button type="submit" class="btn btn-primary btn-flat btn-sm">
                    <i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;
                    Simpan Data
                </button>
                <span class="status-skill font-weight-bold"></span>
            </div>
        </form>
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
        <form action="<?= site_url('update-project') ?>" id="formProject">
            <div id="project-content">
                <?php if (!empty($info['project'])) {
                    foreach ($info['project'] as $key => $vv) { ?>
                        <div class="row" id="<?= $key ?>">
                            <div class="form-group col-md-4 col-12">
                                <label for="project">Project Name</label>
                                <input type="text" name="project[]" value="<?= $vv->project ?>" id="project-<?= $key ?>" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4 col-12">
                                <label for="institution-project">Institution</label>
                                <input type="text" name="institution[]" value="<?= $vv->institution ?>" id="institution-project-<?= $key ?>" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4 col-12">
                                <label for="platform">Platform</label>
                                <input type="text" name="platform[]" value="<?= $vv->platform ?>" id="platform-<?= $key ?>" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4 col-12">
                                <label for="year-project">Year</label>
                                <input type="number" name="year[]" value="<?= $vv->year ?>" id="year-project-<?= $key ?>" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4 col-12">
                                <label for="url">Product URL</label>
                                <input type="url" name="url[]" value="<?= $vv->url ?>" id="url-<?= $key ?>" class="form-control" required>
                            </div>
                            <?php if ($key > 0) { ?>
                                <div class="col-md-12 text-center">
                                    <a href="javascript:void(0)" class="small text-danger" onclick="removeAppend('<?= $key ?>')">Hapus Inputan</a>
                                </div>
                            <?php } ?>
                            <div class="col-md-12">
                                <hr>
                            </div>
                        </div>
                    <?php
                    }
                } else { ?>
                    <div class="row">
                        <div class="form-group col-md-4 col-12">
                            <label for="project">Project Name</label>
                            <input type="text" name="project[]" id="project" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4 col-12">
                            <label for="institution-project">Institution</label>
                            <input type="text" name="institution[]" id="institution-project" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4 col-12">
                            <label for="platform">Platform</label>
                            <input type="text" name="platform[]" id="platform" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4 col-12">
                            <label for="year-project">Year</label>
                            <input type="number" name="year[]" id="year-project" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4 col-12">
                            <label for="url">Product URL</label>
                            <input type="url" name="url[]" id="url" class="form-control" required>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="form-group margin-top-lg">
                <button type="submit" class="btn btn-primary btn-flat btn-sm">
                    <i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;
                    Simpan Data
                </button>
                <span class="status-project font-weight-bold"></span>
            </div>
        </form>
    </div>
</div>


<script>
    function setinput(e, ref) {
        $(e).addClass("hidden");
        var v = $(`#${ref}`).val();
        var apdV = "";
        if (v == "") {
            apdV += `${e.innerHTML}`;
        } else {
            apdV += `${v}, ${e.innerHTML}`;
        }
        $(`#${ref}`).val(apdV);
    }
    $(".appendInput-btn").click(function() {
        appendInput(Date.now());
    });
    $(".appendInputProject-btn").click(function() {
        appendInputProject(Date.now());
    });

    function appendInputProject(id) {
        var apnd = `
        <div class="row"  id="${id}">
        <div class="col-md-12">
                <hr>
                </div>
                    <div class="form-group col-md-4 col-12">
                        <label for="project-${id}">Project Name</label>
                        <input type="text" name="project[]" id="project-${id}" class="form-control" required>
                    </div>
                    <div class="form-group col-md-4 col-12">
                        <label for="institution-project-${id}">Institution</label>
                        <input type="text" name="institution[]" id="institution-project-${id}" class="form-control" required>
                    </div>
                    <div class="form-group col-md-4 col-12">
                        <label for="platform-${id}">Platform</label>
                        <input type="text" name="platform[]" id="platform-${id}" class="form-control" required>
                    </div>
                    <div class="form-group col-md-4 col-12">
                        <label for="year-project-${id}">Year</label>
                        <input type="number" name="year[]" id="year-project-${id}" class="form-control" required>
                    </div>
                    <div class="form-group col-md-4 col-12">
                        <label for="url-${id}">Product URL</label>
                        <input type="url" name="url[]" id="url-${id}" class="form-control" required>
                    </div>
                    <div class="form-group col-md-12 col-12 text-center">
                        <a href="javascript:void(0)" class="small text-danger" onclick="removeAppend('${id}')">Hapus Inputan</a>
                    </div>
                </div>`;

        $("#project-content").append(apnd);
    }

    function appendInput(id) {
        var append = `
        <div class="row" id="${id}">
                <div class="col-md-12">
                <hr>
                </div>
                <div class="form-group col-md-3 col-12">
                    <label for="qualification-awarded-${id}">Qualification Awarded</label>
                    <input type="text" name="qualification[]" id="qualification-awarded-${id}" class="form-control" required>
                </div>
                <div class="form-group col-md-3 col-12">
                    <label for="principal-studies-${id}">Principal Studies</label>
                    <input type="text" name="principal_studies[]" id="principal-studies-${id}" class="form-control" required>
                </div>
                <div class="form-group col-md-3 col-12">
                    <label for="institution-${id}">Institution</label>
                    <input type="text" name="institution[]" id="institution-${id}" class="form-control" required>
                </div>
                <div class="form-group col-md-3 col-12">
                    <label for="year-${id}">Year</label>
                    <input type="number" name="year[]" id="year-${id}" class="form-control" required>
                </div>
                <div class="form-group col-md-12 col-12 text-center">
                    <a href="javascript:void(0)" class="small text-danger" onclick="removeAppend('${id}')">Hapus Inputan</a>
                </div>
            </div>`;

        $("#form-education").append(append);
    };

    function removeAppend(id) {
        $(`#${id}`).remove();
    }

    $("#formEducation").on('submit', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var data = $(this).serialize();
        $.post(url, data, function(res) {
            if (res.code == 200) {
                $(".status-education").html(res.message);
                $(".status-education").css("font-weight", "bold");
                $(".status-education").addClass("badge bg-green");

            } else {
                $(".status-education").html(res.message);
                $(".status-education").css("font-weight", "bold");
                $(".status-education").addClass("badge bg-red");
            }
            $(".status-education").fadeOut(3500, function() {
                $(".status-education").html('');
                $(".status-education").removeClass('hidden badge bg-green bg-red');
                $(".status-education").css('display', 'inline');
            });
        }, 'json');
    });
    $("#formPersonalInfo").on('submit', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var data = $(this).serialize();
        $.post(url, data, function(res) {
            if (res.code == 200) {
                $(".status").html(res.message);
                $(".status").css("font-weight", "bold");
                $(".status").addClass("badge bg-green");

            } else {
                $(".status").html(res.message);
                $(".status").css("font-weight", "bold");
                $(".status").addClass("badge bg-red");
            }
            $(".status").fadeOut(3500, function() {
                $(".status").html('');
                $(".status").removeClass('hidden badge bg-green bg-red');
                $(".status").css('display', 'inline');
            });
        }, 'json');
    });

    $("#formProject").on('submit', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var data = $(this).serialize();
        $.post(url, data, function(res) {
            if (res.code == 200) {
                $(".status-project").html(res.message);
                $(".status-project").css("font-weight", "bold");
                $(".status-project").addClass("badge bg-green");

            } else {
                $(".status-project").html(res.message);
                $(".status-project").css("font-weight", "bold");
                $(".status-project").addClass("badge bg-red");
            }
            $(".status-project").fadeOut(3500, function() {
                $(".status-project").html('');
                $(".status-project").removeClass('hidden badge bg-green bg-red');
                $(".status-project").css('display', 'inline');
            });
        }, 'json');
    });
    $("#formSkills").on('submit', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var data = $(this).serializeArray();
        $.post(url, data, function(res) {
            if (res.code == 200) {
                $(".status-skill").html(res.message);
                $(".status-skill").css("font-weight", "bold");
                $(".status-skill").addClass("badge bg-green");

            } else {
                $(".status-skill").html(res.message);
                $(".status-skill").css("font-weight", "bold");
                $(".status-skill").addClass("badge bg-red");
            }
            $(".status-skill").fadeOut(3500, function() {
                $(".status-skill").html('');
                $(".status-skill").removeClass('hidden badge bg-green bg-red');
                $(".status-skill").css('display', 'inline');
            });
        }, 'json');
    });

    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            $("#photo-preview").css("background-image", `url('${reader.result}')`);
            $('[name="gambar"]').val(reader.result);
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>