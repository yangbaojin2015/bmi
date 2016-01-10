<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMI</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <form action="{{ route('bmi_path') }}" method="get" role="form">
                <legend>Calculate your BMI</legend>
                @if(! empty($bmi))
                    <div class="alert alert-success">
                        Your BMI is: {{ $bmi }}
                    </div>
                @endif
                <div class="form-group">
                    <input type="number" class="form-control" name="w" id="" placeholder="Weight" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="h" id="" placeholder="High" required>
                </div>
                <button type="submit" class="btn btn-primary">Calculate</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
