@extends('layouts/basic')

@section('content')
    <h1>STATS</h1>
    <h2>Total: {{$total}}</h2>
    <h2>Male: {{$totalMale}}</h2>
    <h2>Female: {{$totalFemale}}</h2>
    <br>
    <h2>Foundation: {{$totalFoundation}}</h2>
    <h2>Diploma: {{$totalDiploma}}</h2>
    <h2>Degree: {{$totalDegree}}</h2>
    <h2>Masters: {{$totalMasters}}</h2>
    <h2>PhD: {{$totalPhD}}</h2>
    <br>
    <h2>Mathematics: {{$totalMaths}}</h2>
    <h2>Physics: {{$totalPhysics}}</h2>
    <h2>Engineering: {{$totalEngine}}</h2>
    <h2>Chemistry: {{$totalChemistry}}</h2>
    <h2>Biology: {{$totalBiology}}</h2>

    <form action="/profile" method="GET" class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> My Profile
                </button>
            </div>
        </div>
    </form>
    <form action="/logout" method="GET" class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Logout
                </button>
            </div>
        </div>
    </form>
@endsection