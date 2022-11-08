@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-8 col-md-8 mb-2">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Item</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>
                    No
                  </th>
                  <th>
                    Kode
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Harga
                  </th>
                  <th>
                    Qty
                  </th>
                  <th>
                    Subtotal
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="text-right"></td>
                  <td class="text-right"></td>
                  <td class="text-right"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer">
          <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-danger">Tutup</a>
        </div>
      </div>
    </div>
    <div class="col col-lg-4 col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Ringkasan</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    Total
                  </td>
                  <td>
                    
                  </td>
                </tr>
                <tr>
                  <td>
                    Subtotal
                  </td>
                  <td>
                    
                  </td>
                </tr>
                <tr>
                  <td>
                    Diskon
                  </td>
                  <td>
                    
                  </td>
                </tr>
                <tr>
                  <td>
                    Ongkir
                  </td>
                  <td>
                    
                  </td>
                </tr>
                <tr>
                  <td>
                    Ekspedisi
                  </td>
                  <td>
                    
                  </td>
                </tr>
                <tr>
                  <td>
                    No. Resi
                  </td>
                  <td>
                    
                  </td>
                </tr>
                <tr>
                  <td>
                    Status Pembayaran
                  </td>
                  <td>
                    
                  </td>
                </tr>
                <tr>
                  <td>
                    Status
                  </td>
                  <td>
                    
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection