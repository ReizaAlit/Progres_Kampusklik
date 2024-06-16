<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
        <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="library/assets/styles.css" rel="stylesheet" media="screen">
        <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
        <form action ="proses_pert7.php" method ="POST"> 
        NPM : 
        <input type ="text" name="npm" value=""></input> <br>
        NILAI : 
        <input type ="text" name="nilai" value=""></input> <br>
        ULANGI :
        <input type ="text" name="ulangi" value=""></input> <br>

        <button type ="submit" name ="prosesdata">
            PROSES DATA
        </button>

    </form>


    <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Input Nilai Mahasiswa</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                <form action ="proses_pert7.php" method ="POST" class ="form-horizontal">
                                      <fieldset>
                                        <legend>Input Nilai Mahasiswa</legend>

                                        <div class="control-group">
                                        <label class="control-label" for="npm">NPM Mahasiswa</label>
                                        <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="npm"  name="npm" value="">
                                        </div>
                                    </div>      

                                    <div class="control-group">
                                        <label class="control-label" for="nilai">Nilai Mahasiswa</label>
                                        <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="nilai"  name="nilai" value="">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="nilai">Ulangi</label>
                                        <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="ulangi"  name="ulangi" value="">
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">Proses data</button>
                                        <button type="reset" class="btn">Cancel</button>
                                    </div>
                                    </div>
                                 </form> 
                     </div>
                         </div>
                                </div>
                                    </div>
                                        </div>
</body>
</html>