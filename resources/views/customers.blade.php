@include('subview.header')

<!-- Sidebar -->
@include('subview.sidebar')



<style>
  .dash {
    display: flex;
  }

  .dash>div {
    flex: 1;
  }
</style>

<!-- Icon Cards-->
<div class="row">
  <div class="col-xl-12  mb-3 content-right">
      <button class="btn btn-secondary">Export</button>
      <button class="btn btn-danger" id="">Delete</button>
      <button class="btn btn-primary" id="">New Customer</button>
  </div>
  <div class="col-xl-12  mb-3">
    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Customers</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
              <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
              </tr>
              <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
              </tr>
              <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
              </tr>
              <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
</div>

</div>

<!-- Sticky Footer -->
@include('subview.footer')