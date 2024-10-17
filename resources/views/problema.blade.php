@extends('layouts.template')
@section('content')
<div class="form-signin">
    <form action="">
        <label for="" class="text-align-left">Método:</label>
        <select name="" id="" class="form-select mb-1">
            <option value="">Simplex</option>
            <option value="">Grande M</option>
            <option value="">Duas Fases</option>
        </select>
        <label for="">Quantas Variáveis?</label>
        <input type="text" class="form-control mb-1" placeholder="2">
        <label for="">Quantas Restrições?</label>
        <input type="text" class="form-control" placeholder="3">
        <div class="text-center mt-5">
            <button class="btn btn-orange" type="submit"><strong>Continuar</strong></button>
        </div>
    </form>
</div>
@endsection