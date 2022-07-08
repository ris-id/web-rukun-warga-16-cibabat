@extends('layouts.client.app')
<style>
  .container-menu {}
</style>

@section('content')
<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('{{asset('dist/img/client/bg3.jpg')}}')">
    <span class="mask bg-gradient-dark opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">PKK Rukun Warga 16</h1>
          <p class="lead text-white mt-3">Siap Melayani sepenuh Hati <br /> ------- </p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

  <section class="pt-4">
    <div class="container">
      <center>
        <h1 class="mb-5"> Mengenai PKK </h1>
      </center>
    </div>
  </section>




  <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
  <div class="container py-3">
    <div class="row justify-content-center">
      <!-- <div class="col-md-2">
        <div class="card shadow-lg">
          <div class="card-header text-center pt-4 pb-3">
            <i class="fa-solid fa-people-carry-box fa-5x" style="color:darkblue"></i></br></br>
            <h5>POKJA</h5>
          </div>
          <div class="card-body text-lg-start text-center pt-0">
            <a href="javascript:;" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0" data-bs-toggle="modal" data-bs-target="#modal-pokja">
              Lihat
              <i class="fas fa-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      </div> -->

      <div class="col-lg-2">
        <div class="card shadow-lg">
          <div class="card-header text-center pt-4 pb-3">
            <i class="fa-solid fa-list-check fa-5x"></i></br></br>
            <h5>TUPOKSI</h5>
          </div>
          <div class="card-body text-lg-start text-center pt-0">
            <a href="javascript:;" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0" data-bs-toggle="modal" data-bs-target="#modal-tupoksi">
              Lihat
              <i class="fas fa-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="card shadow-lg">
          <div class="card-header text-center pt-4 pb-3">
            <i class="fa-solid fa-people-group fa-5x" style="color:red"></i></br></br>
            <h5>ANGGOTA</h5>
          </div>
          <div class="card-body text-lg-start text-center pt-0">
            <a href="javascript:;" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0" data-bs-toggle="modal" data-bs-target="#modal-anggota">
              Lihat
              <i class="fas fa-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="card shadow-lg">
          <div class="card-header text-center pt-4 pb-3">
            <i class="fa-solid fa-calendar-days fa-5x" style="color:green"></i></br></br>
            <h5>KEGIATAN</h5>
          </div>
          <div class="card-body text-lg-start text-center pt-0">
            <a href="javascript:;" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0" data-bs-toggle="modal" data-bs-target="#modal-kegiatan">
              Lihat
              <i class="fas fa-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="card shadow-lg">
          <div class="card-header text-center pt-4 pb-3">
            <i class="fa-solid fa-images fa-5x"></i></br></br>
            <h5>GALERI</h5>
          </div>
          <div class="card-body text-lg-start text-center pt-0">
            <a href="javascript:;" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0" data-bs-toggle="modal" data-bs-target="#modal-galeri">
              Lihat
              <i class="fas fa-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- end card  -->

    </div>

  </div>


</div>


<!-- AREA MODAL -->
<!-- <div class="modal fade" id="modal-pokja" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
  <div class="modal-dialog modal- modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">PROGRAM KERJA PKK</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-pokja1" role="tab" aria-controls="home">POKJA I</a>
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-pokja2" role="tab" aria-controls="profile">POJA II</a>
              <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-pokja3" role="tab" aria-controls="messages">POKJA III</a>
              <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-pokja4" role="tab" aria-controls="settings">POKJA 4</a>
            </div>
          </div>
          <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-pokja1" role="tabpanel" aria-labelledby="list-pokja1-list">content pokja 1</div>
              <div class="tab-pane fade" id="list-pokja2" role="tabpanel" aria-labelledby="list-pokja2-list">...</div>
              <div class="tab-pane fade" id="list-pokja3" role="tabpanel" aria-labelledby="list-pokja3-list">...</div>
              <div class="tab-pane fade" id="list-pokja4" role="tabpanel" aria-labelledby="list-pokja4-list">...</div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->

<div class="modal fade" id="modal-tupoksi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
  <div class="modal-dialog modal- modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">TUGAS DAN FUNGSI TIM PENGGERAK PKK</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">

        <table>
          <th><b>Tugas</b></th>
          <tr>
            <td class="align-middle text-center"> a.</td>
            <td> Merencanakan, melaksanakan dan membina pelaksanaan program-program kerja TP PKK, sesuai dengan keadaan dan kebutuhan masyarakat.</td>
          </tr>
          <tr>
            <td class="align-middle text-center"> b.</td>
            <td> Menghimpun, menggerakkan dan membina potensi masyarakat, khususnya keluarga untuk terlaksananya program-program TP PKK.</td>
          </tr>
          <tr>
            <td class="align-middle text-center"> c.</td>
            <td> Menghimpun, menggerakkan dan membina potensi masyarakat, khususnya keluarga untuk terlaksananya program-program TP PKK.
              Memberikan bimbingan, motivasi dan memfasilitasi TP PKK/Kelompok-kelompok PKK di bawahnya.</td>
          </tr>
          <tr>
            <td class="align-middle text-center"> d.</td>
            <td> Menyampaikan laporan tentang pelaksanaan tugas kepada Ketua Pembina TP PKK setempat dan Kepada Ketua Umum/Ketua TP PKK setingkat di atasnya.</td>
          </tr>
          <tr>
            <td class="align-middle text-center"> e.</td>
            <td> Mengadakan supervise, monitoring, evaluasi dan pelaporan (SMEP), terhadap pelaksanaan program-program TP PKK.</td>
          </tr>

          <th>Fungsi</th>
          <tr>
            <td class="align-middle text-center"> a.</td>
            <td>Penyuluh, motivator, dan penggerak masyarakat agar mau dan mampu melaksanakan program TP PKK.</td>
          </tr>
          <tr>
            <td class="align-middle text-center"> b.</td>
            <td>Fasilitator, perencana, pelaksana, pengendali, Pembina, dan pembimbing TP PKK.</td>
          </tr>
        </table>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modal-Anggota" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
  <div class="modal-dialog modal- modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">ANGGOTA PKK</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">no.</th>
              <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Nama Anggota</th>
              <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Jabatan</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            @foreach($AnggotaPKK as $data)
            <tr>
              <td class="align-middle text-center text-sm">
                <p class="text-xs font-weight-bold mb-0">{{$no++}}</p>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-normal">{{$data->nama_anggota}}</span>
              </td>
              <td class="align-middle text-center text-sm">
                <p class="text-xs font-weight-bold mb-0">{{$data->jabatan}}</p>
              </td>
            </tr>

            @endforeach
          </tbody>
        </table>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="modal-kegiatan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
  <div class="modal-dialog modal- modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">JADWAL KEGIATAN</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">no.</th>
                  <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">nama kegiatan</th>
                  <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">tanggal</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                @foreach($pkk as $row)
                <tr>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$no++}}</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-normal">{!! $row->agenda !!}</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$row->tanggal}}</p>
                  </td>
                </tr>

                @endforeach
              </tbody>
            </table>
          </div>
        </div>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="modal-galeri" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
  <div class="modal-dialog modal- modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-default">GALERI AKTIVITAS</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            @foreach($pkk as $galeri)
            <div class="col-lg-4">
              <img src="/image/pkk/{{$galeri->foto}}" class="img-thumbnail" alt="...">
            </div>
            @endforeach
          </div>
        </div>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->


@endsection