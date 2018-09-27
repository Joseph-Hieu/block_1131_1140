<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/25-11.less', 'css/25-11.css');
        ?>
        <link href="css/25-11.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="js/close-general4.js" type="text/javascript"></script>
    </head>

    <body>

        <div class="type-25-11">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="row content6">
                            <div class="col-md-6 col-xs-12">
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="x_panel4">
                                    <div class="x_title">
                                        <h2>Form Basic Elements <small>different form elements</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#general4"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a id="close-link4"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="general4">
                                        <br>
                                        <form class="form-horizontal">

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" class="form-control" placeholder="Default Input">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span>*</span>
                                                </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <textarea class="form-control" rows="3" placeholder="rows=&quot;3&quot;"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="password" class="form-control" value="passwordonetwo">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">AutoComplete</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" name="country"class="form-control col-md-10">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <select class="form-control">
                                                        <option>Choose option</option>
                                                        <option>Option one</option>
                                                        <option>Option two</option>
                                                        <option>Option three</option>
                                                        <option>Option four</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Custom</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <select class="form-control" tabindex="-1">
                                                        <option></option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="WY">Wyoming</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Grouped</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <select class="form-control">
                                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                        </optgroup>
                                                        <optgroup label="Pacific Time Zone">
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                        </optgroup>
                                                        <optgroup label="Mountain Time Zone">
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="MT">Montana</option>
                                                            <option value="NE">Nebraska</option>
                                                            <option value="NM">New Mexico</option>
                                                            <option value="ND">North Dakota</option>
                                                            <option value="UT">Utah</option>
                                                            <option value="WY">Wyoming</option>
                                                        </optgroup>
                                                        <optgroup label="Central Time Zone">
                                                            <option value="AL">Alabama</option>
                                                            <option value="AR">Arkansas</option>
                                                            <option value="IL">Illinois</option>
                                                            <option value="IA">Iowa</option>
                                                            <option value="KS">Kansas</option>
                                                            <option value="KY">Kentucky</option>
                                                            <option value="LA">Louisiana</option>
                                                            <option value="MN">Minnesota</option>
                                                            <option value="MS">Mississippi</option>
                                                            <option value="MO">Missouri</option>
                                                            <option value="OK">Oklahoma</option>
                                                            <option value="SD">South Dakota</option>
                                                            <option value="TX">Texas</option>
                                                            <option value="TN">Tennessee</option>
                                                            <option value="WI">Wisconsin</option>
                                                        </optgroup>
                                                        <optgroup label="Eastern Time Zone">
                                                            <option value="CT">Connecticut</option>
                                                            <option value="DE">Delaware</option>
                                                            <option value="FL">Florida</option>
                                                            <option value="GA">Georgia</option>
                                                            <option value="IN">Indiana</option>
                                                            <option value="ME">Maine</option>
                                                            <option value="MD">Maryland</option>
                                                            <option value="MA">Massachusetts</option>
                                                            <option value="MI">Michigan</option>
                                                            <option value="NH">New Hampshire</option>
                                                            <option value="NJ">New Jersey</option>
                                                            <option value="NY">New York</option>
                                                            <option value="NC">North Carolina</option>
                                                            <option value="OH">Ohio</option>
                                                            <option value="PA">Pennsylvania</option>
                                                            <option value="RI">Rhode Island</option>
                                                            <option value="SC">South Carolina</option>
                                                            <option value="VT">Vermont</option>
                                                            <option value="VA">Virginia</option>
                                                            <option value="WV">West Virginia</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Multiple</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <select class="form-control" multiple="multiple">
                                                        <option>Choose option</option>
                                                        <option>Option one</option>
                                                        <option>Option two</option>
                                                        <option>Option three</option>
                                                        <option>Option four</option>
                                                        <option>Option five</option>
                                                        <option>Option six</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" class="tags form-control" value="social, adverts, sales" data-tagsinput-init="true" style="display: none;">
                                                    <div class="tagsinput">
                                                        <span class="tag1">
                                                            <span>social</span>
                                                            <a id="close-link1" href="#">x</a>
                                                        </span>
                                                        <span class="tag2">
                                                            <span>adverts</span>
                                                            <a id="close-link2" href="#">x</a>
                                                        </span>
                                                        <span class="tag3">
                                                            <span>sales</span>
                                                            <a id="close-link3" href="#">x</a>
                                                        </span>
                                                        <div class="form-group">
                                                            <input id="tags_1_tag" value="" placeholder="add a tag">
                                                        </div>
                                                    </div>                                        
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                                                    <br>
                                                    <small>Normal Bootstrap elements</small>
                                                </label>

                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value=""> Option one. select more than one options
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value=""> Option two. select more than one options
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" checked="" value="option1" name="optionsRadios"> Option one. only select one option
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="option2" name="optionsRadios"> Option two. only select one option
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                                                    <br>
                                                    <small >Normal Bootstrap elements</small>
                                                </label>

                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="icheckbox_flat-green checked">
                                                                <input  class="rad"type="checkbox" checked="checked" style="">
                                                                
                                                            </div> Checked
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="icheckbox_flat-green">
                                                                <input class="rad" type="checkbox">
                                                                
                                                            </div> Unchecked
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="icheckbox_flat-green disabled">
                                                                <input class="rad" type="checkbox"disabled="disabled">
                                                                
                                                            </div> Disabled
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="icheckbox_flat-green checked disabled">
                                                                <input class="rad" type="checkbox"disabled="disabled" checked="checked">
                                                                
                                                            </div> Disabled &amp; checked
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <div class="iradio_flat-green checked">
                                                                <input class="rad" type="radio" checked="" name="iCheck">
                                                                
                                                            </div> Checked
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <div class="iradio_flat-green">
                                                                <input class="rad" type="radio" name="iCheck">
                                                                
                                                            </div> Unchecked
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <div class="iradio_flat-green disabled">
                                                                <input class="rad" type="radio" name="iCheck" disabled="disabled">
                                                                
                                                            </div> Disabled
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <div class="iradio_flat-green checked disabled">
                                                                <input class="rad" type="radio"name="iCheck3" disabled="disabled" checked="">
                                                                
                                                            </div> Disabled &amp; Checked
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Switch</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <div class="">
                                                        <label>
                                                            <input type="checkbox" checked="" data-switchery="true" style="display: none;">
                                                            <span class="switchery check1">
                                                                <small class="mall1"></small>
                                                            </span> Checked
                                                        </label>
                                                    </div>
                                                    <div class="">
                                                        <label>
                                                            <input type="checkbox" data-switchery="true" style="display: none;">
                                                            <span class="switchery check2">
                                                                <small class="mall2"></small>
                                                            </span> Unchecked
                                                        </label>
                                                    </div>
                                                    <div class="">
                                                        <label>
                                                            <input type="checkbox" disabled="disabled" data-switchery="true" readonly="" style="display: none;">
                                                            <span class="switchery check3">
                                                                <small class="mall2"></small>
                                                            </span> Disabled
                                                        </label>
                                                    </div>
                                                    <div class="">
                                                        <label>
                                                            <input type="checkbox"  disabled="disabled" checked="checked" data-switchery="true" readonly="" style="display: none;">
                                                            <span class="switchery check4">
                                                                <small class="mall3"></small>
                                                            </span> Disabled Checked
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                    <button type="button" class="btn btn-primary">Cancel</button>
                                                    <button type="reset" class="btn btn-primary">Reset</button>
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>


        </div>
    </body>

</html>