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

  <div class="col-xl-8  mb-3">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-search" type="button"><i class="fa fa-search fa-fw"></i> Search</button>
      </span>
    </div>
  </div>
  <div class="col-xl-4  mb-3 right">
    <div style="float: right">
      <button class="btn btn-secondary">Export</button>
      <button class="btn btn-primary" id="">Today</button>
    </div>
  </div>
  <div class="col-xl-12  mb-3">
    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Orders</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Order Id</th>
                <th>Order Name</th>
                <th>Type</th>
                <th>Age</th>
                <th>Fulfillment</th>
                <th>Status</th>
                <th>Total Sales</th>
                <th>Employee</th>
                <th>Customer</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
              <th>Order Id</th>
                <th>Order Name</th>
                <th>Type</th>
                <th>Age</th>
                <th>Fulfillment</th>
                <th>Status</th>
                <th>Total Sales</th>
                <th>Employee</th>
                <th>Customer</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
              </tr>
              <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
              </tr>
              <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
              </tr>
              <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
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