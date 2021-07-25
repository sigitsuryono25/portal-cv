<div class="box">
    <div class="box-header with-border border-danger">
        <h3 class="box-title">Personal Information</h3>
    </div>
    <div class="box-body">
        <form action="">
            <div class="row">
                <div class="col-md-3 col-12 text-center">
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <div id="photo-preview" style="width: 250px; height: 250px; 
                    background-image: url('<?= base_url('assets/dist/img/avatar5.png') ?>');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;"></div>
                    </div>
                    <!-- <img src="" alt="" class="img-fluid"> -->
                    <small class="text-danger margin-x-lg block"><strong>Ukuran gambar 250 X 250</strong></small>
                    <a href="javascript:void(0)" onclick="$('#image-pick').trigger('click')" class="text-center btn btn-block btn-flat btn-sm btn-warning">
                        Choose File...
                    </a>
                    <input type="file" id="image-pick" class="hidden form-control-file">

                </div>
                <div class="col-md-9 col-12">
                    <div class="form-group">
                        <label for="nama">Name</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="descriptions">Short Description About You</label>
                        <textarea name="descriptions" id="descriptions" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Address</label>
                        <textarea name="alamat" id="alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Phone</label>
                        <input type="tel" name="telepon" id="telepon" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kebangsaan">Nationality</label>
                        <input type="text" name="kebangsaan" id="kebangsaan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="ttl">Date of Birth</label>
                        <input type="date" name="ttl" id="ttl" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="">--Please Choose One--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tentang">Current Job</label>
                        <input type="text" name="tentang" id="tentang" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-flat btn-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;
                            Simpan Data
                        </button>
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
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-flat btn-sm">
                    <i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;
                    Simpan Data
                </button>
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
            <h4>You can add your own skills by typing or select the popular items</h4>
        </div>
        <form action="">
            <div id="form-education ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="programming-language">Programming Language</label>
                            <input type="text" name="programming_lang" id="programming-language" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <span class=""><strong>Popular Programming Language</strong></span><br>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Kotlin</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Java</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Swift</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Javascript</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Typescript</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">SQL</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Python</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Dart</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">C#</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">Visual Basic</span>
                        <span class="badge btn bg-red" onclick="setinput(this, 'programming-language')">ASP</span>
                    </div>
                </div>
                <hr>
                <div class="row margin-top-lg">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="mobile-plat">Mobile Platforms</label>
                            <input type="text" name="mobile_platforms" id="mobile-plat" class="form-control" required>
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
                            <input type="text" name="os" id="os" class="form-control" required>
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
                            <input type="text" name="database" id="database-in" class="form-control" required>
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
                            <input type="text" name="framework" id="framework" class="form-control" required>
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
                            <input type="text" name="ide" id="ide" class="form-control" required>
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
            <div class="form-group margin-top-lg">
                <button type="submit" class="btn btn-primary btn-flat btn-sm">
                    <i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;
                    Simpan Data
                </button>
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
            </div>
            <div class="form-group margin-top-lg">
                <button type="submit" class="btn btn-primary btn-flat btn-sm">
                    <i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;
                    Simpan Data
                </button>
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
        var url = $(this).attr('action') + "?uuid=sigitsuryono25";
        var data = $(this).serialize();
        $.post(url, data, function(res) {
            console.log(res);
        }, 'text');
    });
    $("#formProject").on('submit', function(e) {
        e.preventDefault();
        var url = $(this).attr('action') + "?uuid=sigitsuryono25";
        var data = $(this).serialize();
        $.post(url, data, function(res) {
            console.log(res);
        }, 'text');
    })
</script>