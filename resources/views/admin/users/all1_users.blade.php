@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
            <h4 class="page-title">All Users</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <div class=" float-right">
                <a href="{{ route('user.add') }}" class="btn btn-primary">Add User</a>    
            </div> 
            <div class="d-flex align-items-center justify-content-between">
            </div>
            <div class="mb-5">
                <form action="{{ route('users.search') }}" method="GET">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="search">
                        </div> 
                        <div class="col-sm-2">
                            <input type="submit" class="btn btn-primary" value="search">    
                        </div>  
                    </div> 
                </form>
            </div>
            
            
            <table class="table  table-bordered w-100 nowrap" id="">
                <thead>
                    <tr>
                        <th width="20">S.No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>ACL</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($users) && isset($users))
                        @foreach($users as $k => $user)
                        <tr>
                            <td>
                                <p class="m-0 text-center">{{ $users->firstItem() + $k }}</p>
                            </td>
                            <td>{{ $user->username}}</td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->address}}</td>
                            <td>{{ $user->contact_number}}</td>
                            <td>
                                @if($user->acl == 1)
                                    <span class="badge badge-success">Enabled</span>
                                @else
                                    <span class="badge badge-danger">Disabled</span>
                                @endif
                            </td>
                            <td>  
                                <a href="{{ route('user.update',['user_id'=>$user->hashid]) }}"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                     @else
                        <h1>NO DATA</h1>   
                    @endif    
                </tbody>
            </table>
             {{ $users->links() }}
        </div>
    </div>
</div>


@endsection
<div class="attribute-blocks">
                                                        <h5 class="f-w-600 mb-3">Product Related permition </h5>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Add Product</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani1">
                                                                        <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani2">
                                                                        <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Update Product</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani3">
                                                                        <input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani1">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani4">
                                                                        <input class="radio_animated" id="edo-ani4" type="radio" name="rdo-ani1" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Delete Product</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani5">
                                                                        <input class="radio_animated" id="edo-ani5" type="radio" name="rdo-ani2">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani6">
                                                                        <input class="radio_animated" id="edo-ani6" type="radio" name="rdo-ani2" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label class="mb-0 sm-label-radio">Apply discount</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated pb-0">
                                                                    <label class="d-block mb-0" for="edo-ani7">
                                                                        <input class="radio_animated" id="edo-ani7" type="radio" name="rdo-ani3">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block mb-0" for="edo-ani8">
                                                                        <input class="radio_animated" id="edo-ani8" type="radio" name="rdo-ani3" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="attribute-blocks">
                                                        <h5 class="f-w-600 mb-3">Category Related permition </h5>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Add Category</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani9">
                                                                        <input class="radio_animated" id="edo-ani9" type="radio" name="rdo-ani4">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani10">
                                                                        <input class="radio_animated" id="edo-ani10" type="radio" name="rdo-ani4" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Update Category</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani11">
                                                                        <input class="radio_animated" id="edo-ani11" type="radio" name="rdo-ani5">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani12">
                                                                        <input class="radio_animated" id="edo-ani12" type="radio" name="rdo-ani5" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Delete Category</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani13">
                                                                        <input class="radio_animated" id="edo-ani13" type="radio" name="rdo-ani6">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani14">
                                                                        <input class="radio_animated" id="edo-ani14" type="radio" name="rdo-ani6" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label class="mb-0 sm-label-radio">Apply discount</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline custom-radio-ml d-flex radio-animated pb-0">
                                                                    <label class="d-block mb-0" for="edo-ani15">
                                                                        <input class="radio_animated" id="edo-ani15" type="radio" name="rdo-ani7">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block mb-0" for="edo-ani16">
                                                                        <input class="radio_animated" id="edo-ani16" type="radio" name="rdo-ani7" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

//Import csv

step#1&2
function csvToArray($filename = '', $delimiter = ',')
{
    if (!file_exists($filename) || !is_readable($filename))
        return false;

    $header = null;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== false)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
        {
            if (!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }

    return $data;
}

step#3
public function importCsv()
{
    $file = public_path('file/test.csv');

    $customerArr = $this->csvToArray($file);

    for ($i = 0; $i < count($customerArr); $i ++)
    {
        User::firstOrCreate($customerArr[$i]);
    }

    return 'Jobi done or what ever';    
}