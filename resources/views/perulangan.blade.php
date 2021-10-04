<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Perulangan</title>
    <link rel="stylesheet" href="{{ asset('build/css/app.css') }}">
    <!-- Favicons -->
    <link rel="icon" href="{{ asset('build/assets/icon/favicon-16x16.png') }}" sizes="16x16"
        type="image/png">
</head>
<body>
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="text-center">
                        <img width="42" height="42" src="{{ asset('build/assets/icon/favicon-32x32.png') }}" alt="">
                        <div class="mt-3">
                            <h2>Test Tes Skill PT. Sinergi  Mitra Groserindo</h2>
                            <h2 class="fw-bold text-primary">Program Perulangan</h2>
                            <p class="lead">
                                Silahkan Masukkan Jumlah Perulangan di bawah ini
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <form action="{{ route('store') }}" method="post">
                            @csrf
                            <div class="mt-4 mb-3">
                                <div class="input-group">
                                    <label class="input-group-text">Jumlah Bilangan</label>
                                    <input type="text" id="bilangan" name="bilangan" class="form-control">
                                </div>
                                @error('bilangan')
                                    <div class="text-danger mt-1 d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-secondary" style="float: right">Submit</button>
                        </form>
                    </div>
                    <hr>

                    <h5>Anda Memasukkan Bilangan : <strong class="text-primary">{{ $jumlah }}</strong></h5>
                    <hr>

                    <h5 class="mb-3">Hasil Perulangannya Adalah :</h5>

                    <div class="container">
                        <div class="row">
                            @for($i = 1; $i <= 5; $i++)
                                @for($j = 1; $j <= $jumlah; $j++)
                                    @if($i <= 2)
                                        @if($j%3==0 && $j%5==0)
                                            {{ $kelipatan3dan5 }}
                                        @elseif($j%3==0)
                                            {{ $kelipatan3 }}
                                        @elseif($j%5==0)
                                            {{ $kelipatan5 }}
                                        @else
                                            {{ $j }}
                                        @endif
                                    @else
                                        @if($j%3==0 && $j%5==0)
                                            {{ $kelipatan3dan5 }}
                                        @elseif($j%3==0)
                                            {{ $ubahkelipatan3 }}
                                        @elseif($j%5==0)
                                            {{ $ubahkelipatan5 }}
                                        @else
                                            {{ $j }}
                                        @endif
                                    @endif
                                @endfor

                                <!-- Enter Baris Terakhir -->
                                <br><br>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('build/js/app.js') }}"></script>
</body>

</html>
