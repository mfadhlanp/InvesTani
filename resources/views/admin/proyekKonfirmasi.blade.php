@extends('layouts.admin')

@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Nama Proyek</th>
                        <th>Bukti transfer</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    @foreach($proyek as $proyek)
                    <tbody>
                      <tr>
                        <td>{{ $proyek->name }}</td>
                        <td>{{ $proyek->nama }}</td>
                        <td><img src="{{ asset('storage/'.$proyek->bukti) }}" alt=""></td>
                        <td>
                        <button id="send" type="submit" class="btn btn-info"><a href="{{route('admin.listInvestor', $proyek->id)}}">Investor</a></button>
                        <form action="{{route('admin.proyekSelesai', $proyek->proyekID)}}" method="post" novalidate>
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <input type="hidden" id="status" name="status" value="2">
                                <input type="hidden" id="investasiStatus" name="investasiStatus" value="4">
                          <button id="send" type="submit" class="btn btn-info">Selesai</button>
                          </form>
                          <form action="{{ route('admin.deleteProyek', $proyek->proyekID) }}" method="post" novalidate>
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                          <button id="send" type="submit"  class="btn btn-danger">Hapus</button>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

@endsection