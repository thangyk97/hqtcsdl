<h2>List Jobs</h2>
<a href="{{url('/jobs/create')}}" class="btn btn-primary">Add new job</a> <br><br>
  <table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Position</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Salary</th>
            <th>Experience</th>
            <th>Degree</th>
            <th>Requirement</th>
            <th>Benefit</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

    @foreach($jobs as $job)
    <tr>
        <td>{{$job->id}}</td>
        <td>{{$job->name}}</td>
        <td>{{$job->position}}</td>
        <td>{{$job->description}}</td>
        <td>{{$job->quantity}}</td>
        <td>{{$job->salary}}</td>
        <td>{{$job->experience}}</td>
        <td>{{$job->degree}}</td>
        <td>{{$job->requirement}}</td>
        <td>{{$job->benefit}}</td>
        <td>{{$job->status}}</td>
        <td>
            <a href="{{url('jobs')}}/{{$job->id}}/edit">update</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
