@extends('layouts.backend_master')
@section('content')
  <div class="card">
  <div class="card-header">
    <div class="row">
            <div class="mr-auto mr-3">
                <h2>New donation</h2>
            </div>
            <div class="ml-auto mr-3">
                <a class="btn btn-primary" href="{{ route('donations.index') }}"> <i class="fa fa-backward"></i> </a>
            </div>
    </div>
  </div>
  <div class="card-body">
  {!! Form::open(array('route' => 'donations.store','method'=>'POST')) !!}
  <div class="row">
      <div class="col-md-4">
          <div class="form-group">
              <label>Blood quantity:</label>
              <div class="form-group">
                    <input type="text" class="form-control" name="blood_qty" value="">
              </div>
              @if ($errors->has('hospital_name'))
              {!! $errors->first('hospital_name', '<p class="text-danger">:message</p>') !!}
              @endif
          </div>
      </div>
      <div class="col-md-4">
          <div class="form-group">
              <label>Donate date:</label>
              <div class="form-group">
                    <input type="date" name="donate_date" class="form-control" value="">
              </div>
              @if ($errors->has('Blood_type'))
              {!! $errors->first('Blood_type', '<p class="text-danger">:message</p>') !!}
              @endif
          </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <div class="form-group">
              <label>Result date:</label>
              <input type="date" class="form-control" name="result_date" value="">
          </div>
          @if ($errors->has('Blood_quantity'))
            {!! $errors->first('Blood_quantity', '<p class="text-danger">:message</p>') !!}
          @endif
        </div>
      </div>
  </div>
  <div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Hospital Name:</label>
            <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="hospital_id">
                    <option selected="selected" disabled>Select hospital name</option>
                    <?php foreach ($hospitals as $key => $value): ?>
                          <option value="{{$value->id}}">{{$value->name}}</option>
                    <?php endforeach; ?>
                  </select>
            </div>
            @if ($errors->has('hospital_name'))
            {!! $errors->first('hospital_name', '<p class="text-danger">:message</p>') !!}
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Donor Name:</label>
            <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="donor_id">
                    <option selected="selected" disabled>Select donor name</option>
                    <?php foreach ($donors as $key => $value): ?>
                          <option value="{{$value->id}}">{{$value->id}}</option>
                    <?php endforeach; ?>
                  </select>
            </div>
            @if ($errors->has('hospital_name'))
            {!! $errors->first('hospital_name', '<p class="text-danger">:message</p>') !!}
            @endif
        </div>
    </div>
  </div>
  <div class="row">
      <div class="col-md-4">
        <div class="form-group">
            <label>Sysphilis:</label>
            <div class="icheck-primary d-inline">
                        <input type="checkbox" name="sysphilis" id="checkboxPrimary1">
                        <label for="checkboxPrimary1">
                        </label>
            </div>
            @if ($errors->has('Type_Rh'))
            {!! $errors->first('Type_Rh', '<p class="text-danger">:message</p>') !!}
            @endif
        </div>
      </div>
      <div class="col-md-4">
          <div class="form-group">
              <label>hepotitis B virus:</label>
              <div class="icheck-primary d-inline">
                          <input type="checkbox" name="hepatitis_B_virus" id="checkboxPrimary2">
                          <label for="checkboxPrimary2">
                          </label>
              </div>
              @if ($errors->has('hospital_name'))
              {!! $errors->first('hospital_name', '<p class="text-danger">:message</p>') !!}
              @endif
          </div>
      </div>
      <div class="col-md-4">
          <div class="form-group">
              <label>Human immunodeﬁciency virus:</label>
              <div class="icheck-primary d-inline">
                          <input type="checkbox" name="human_immunodeﬁciency_virus" id="human_immunodeﬁciency_virus">
                          <label for="human_immunodeﬁciency_virus">
                          </label>
              </div>
              @if ($errors->has('Blood_type'))
              {!! $errors->first('Blood_type', '<p class="text-danger">:message</p>') !!}
              @endif
          </div>
      </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <div class="form-group">
            <label>hepatitis c virus:</label>
            <div class="icheck-primary d-inline">
                        <input type="checkbox" name="hepatitis_C_virus" id="hepatitis_C_virus">
                        <label for="hepatitis_C_virus">
                        </label>
            </div>
        </div>
        @if ($errors->has('Blood_quantity'))
          {!! $errors->first('Blood_quantity', '<p class="text-danger">:message</p>') !!}
        @endif
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
          <label>human T Lympotrophic Virus:</label>
          <div class="icheck-primary d-inline">
                      <input type="checkbox" name="human_T_lympotrophic_virus" id="human_T_lympotrophic_virus">
                      <label for="human_T_lympotrophic_virus">
                      </label>
          </div>
          @if ($errors->has('Type_Rh'))
          {!! $errors->first('Type_Rh', '<p class="text-danger">:message</p>') !!}
          @endif
      </div>
    </div>
      <div class="col-md-4">
          <div class="form-group">
              <label>T Cruzi:</label>
              <div class="icheck-primary d-inline">
                          <input type="checkbox" name="t_cruzi" id="t_cruzi">
                          <label for="t_cruzi">
                          </label>
              </div>
              @if ($errors->has('hospital_name'))
              {!! $errors->first('hospital_name', '<p class="text-danger">:message</p>') !!}
              @endif
          </div>
      </div>
  </div>

  <div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Malaria:</label>
            <div class="icheck-primary d-inline">
                        <input type="checkbox" name="malaria" id="malaria">
                        <label for="malaria">
                        </label>
            </div>
            @if ($errors->has('Blood_type'))
            {!! $errors->first('Blood_type', '<p class="text-danger">:message</p>') !!}
            @endif
        </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <div class="form-group">
            <label>West Nile Virus:</label>
            <div class="icheck-primary d-inline">
                        <input type="checkbox" name="west_nile_virus" id="west_nile_virus">
                        <label for="west_nile_virus">
                        </label>
            </div>
        </div>
        @if ($errors->has('Blood_quantity'))
          {!! $errors->first('Blood_quantity', '<p class="text-danger">:message</p>') !!}
        @endif
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
          <label>Cytomegalovirus:</label>
          <div class="icheck-primary d-inline">
                      <input type="checkbox" name="cytomegalovirus" id="cytomegalovirus">
                      <label for="cytomegalovirus">
                      </label>
          </div>
          @if ($errors->has('Type_Rh'))
          {!! $errors->first('Type_Rh', '<p class="text-danger">:message</p>') !!}
          @endif
      </div>
    </div>
  </div>

  <div class="row">
      <div class="col-md-4">
          <div class="form-group">
              <label>Hepatitis E virus:</label>
              <div class="icheck-primary d-inline">
                          <input type="checkbox" name="hepatitis_E_virus" id="hepatitis_E_virus">
                          <label for="hepatitis_E_virus">
                          </label>
              </div>
              @if ($errors->has('hospital_name'))
              {!! $errors->first('hospital_name', '<p class="text-danger">:message</p>') !!}
              @endif
          </div>
      </div>
  </div>


  <div class="row">
      <div class="col-md-3">
          <div class="form-group">
              <label>Blood type:</label>
              <div class="form-group">
                    <select class="form-control select2bs4" style="width: 100%;" name="blood_type">
                            <option selected="selected" disabled>Select a blood type</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                    </select>
              </div>
              @if ($errors->has('hospital_name'))
              {!! $errors->first('hospital_name', '<p class="text-danger">:message</p>') !!}
              @endif
          </div>
      </div>

      <div class="col-md-3">
          <div class="form-group">
              <label>Type Rh:</label>
              <div class="form-group">
                    <select class="form-control select2bs4" style="width: 100%;" name="type_rh">
                            <option selected="selected" disabled>Select a blood type</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                    </select>
              </div>
              @if ($errors->has('Blood_type'))
              {!! $errors->first('Blood_type', '<p class="text-danger">:message</p>') !!}
              @endif
          </div>
      </div>

      <div class="col-md-3">
          <div class="form-group">
              <label>Blood volume:</label>
              <div class="form-group">
                    <input type="text" name="blood_volume" class="form-control" value="">
              </div>
              @if ($errors->has('Blood_type'))
              {!! $errors->first('Blood_type', '<p class="text-danger">:message</p>') !!}
              @endif
          </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <div class="form-group">
              <label>Blood expire date:</label>
              <input type="date" class="form-control" name="blood_expire_date" value="">
          </div>
          @if ($errors->has('Blood_quantity'))
            {!! $errors->first('Blood_quantity', '<p class="text-danger">:message</p>') !!}
          @endif
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <div class="form-group">
              <label>Blood receive date:</label>
              <input type="date" class="form-control" name="blood_receive_date" value="">
          </div>
          @if ($errors->has('Blood_quantity'))
            {!! $errors->first('Blood_quantity', '<p class="text-danger">:message</p>') !!}
          @endif
        </div>
      </div>
  </div>

  <div class="col-md-6 text-center" style="margin-left:25% !important">
      <button type="submit" class="btn btn-primary btn-block">Submit</button>
  </div>

  {!! Form::close() !!}
  </div>
  </div>
  @endsection
  @section('js')
  <script type="text/javascript">
  $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
    });
  </script>
@endsection
