@extends('Layout.peneliti')

@section('title','Proposal Penelitian')

@section('halaman1','/Proposal Penelitian')
@section('nama_halaman1','Proposal Penelitian')

@section('halaman2','/Lampiran Proposal Penelitian')
@section('nama_halaman2','Lampiran')

@section('halaman3','/Panduan Penulisan Proposal Penelitian')
@section('nama_halaman3','Panduan Penulisan Proposal')


@section('nama_halaman','Proposal Penelitian')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Upload Proposal Disini<br>Syarat:<br>
             <small><em>1.Pastikan File Yang Anda Upload Adalah File denganesktensi PDf</em><br></small>
                <small><em>2.Ikuti Penamaan File Sesusai dengan penmaan yang sudah di sedikan dalam Template</em>
            </small></h3>
        </div>
        <div class="card-body">
          <div id="actions" class="row">
            <div class="col-lg-6">
              <div class="btn-group w-100">
                <span class="btn btn-success col fileinput-button">
                  <i class="fas fa-plus"></i>
                  <span>Add files</span>
                </span>
                <button type="submit" class="btn btn-primary col start">
                  <i class="fas fa-upload"></i>
                  <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning col cancel">
                  <i class="fas fa-times-circle"></i>
                  <span>Cancel upload</span>
                </button>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
              <div class="fileupload-process w-100">
                <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                  <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                </div>
              </div>
            </div>
          </div>
          <div class="table table-striped files" id="previews">
            <div id="template" class="row mt-2">
              <div class="col-auto">
                  <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
              </div>
              <div class="col d-flex align-items-center">
                  <p class="mb-0">
                    <span class="lead" data-dz-name></span>
                    (<span data-dz-size></span>)
                  </p>
                  <strong class="error text-danger" data-dz-errormessage></strong>
              </div>
              <div class="col-4 d-flex align-items-center">
                  <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                  </div>
              </div>
              <div class="col-auto d-flex align-items-center">
                <div class="btn-group">
                  <button class="btn btn-primary start">
                    <i class="fas fa-upload"></i>
                    <span>Start</span>
                  </button>
                  <button data-dz-remove class="btn btn-warning cancel">
                    <i class="fas fa-times-circle"></i>
                    <span>Cancel</span>
                  </button>
                  <button data-dz-remove class="btn btn-danger delete">
                    <i class="fas fa-trash"></i>
                    <span>Delete</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
         Download <a href="https://proposal.com">Template Proposal</a> Sebagai Acuan Anda Dalam penulisan Proposal
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>



</div>
<script src="{{asset('../main/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('../main/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('../main/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('../main/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('../main/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('../main/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('../main/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('../main/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('../main/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('../main/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{asset('../main/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<!-- dropzonejs -->
<script src="{{asset('../main/plugins/dropzone/min/dropzone.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('../main/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('../main/dist/js/demo.js')}}"></script>
<script>
  
    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false
  
    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)
  
    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
      url: "/target-url", // Set the url
      thumbnailWidth: 80,
      thumbnailHeight: 80,
      parallelUploads: 20,
      previewTemplate: previewTemplate,
      autoQueue: false, // Make sure the files aren't queued until manually added
      previewsContainer: "#previews", // Define the container to display the previews
      clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })
  
    myDropzone.on("addedfile", function(file) {
      // Hookup the start button
      file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
    })
  
    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function(progress) {
      document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })
  
    myDropzone.on("sending", function(file) {
      // Show the total progress bar when upload starts
      document.querySelector("#total-progress").style.opacity = "1"
      // And disable the start button
      file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })
  
    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function(progress) {
      document.querySelector("#total-progress").style.opacity = "0"
    })
  
    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function() {
      myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function() {
      myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
  </script>

@endsection
