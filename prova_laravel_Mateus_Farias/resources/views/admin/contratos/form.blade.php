<div class="form-group">
    <label for="tipoContrato">Tipo do Contrato</label>
    <input type="text" class="form-control" id="tipoContrato" name="tipoContrato" 
    value="{{isset($contrato->tipoContrato) ? $contrato->tipoContrato : ''}}">
</div>
<div class="form-group">
    <label for="nmEnvolvido1">Nome do Envolvido</label>
    <input type="text" class="form-control" id="nmEnvolvido1" name="nmEnvolvido1" 
    value="{{isset($contrato->nmEnvolvido1) ? $contrato->nmEnvolvido1 : ''}}">
</div>
<div class="form-group">
    <label for="nmEnvolvido2">Nome do Envolvido</label>
    <input type="text" class="form-control" id="nmEnvolvido2" name="nmEnvolvido2" 
    value="{{isset($contrato->nmEnvolvido2) ? $contrato->nmEnvolvido2 : ''}}">
</div>
<div class="form-group">
    <label for="dtContrato">Data do Contrato</label>
    <input type="date" class="form-control" id="dtContrato" name="dtContrato" 
    value="{{isset($contrato->dtContrato) ? $contrato->dtContrato : ''}}">
</div>
<div class="form-group">
    <label for="vlContrato">Valor do Contrato</label>
    <input type="text" class="form-control" id="vlContrato" name="vlContrato" 
    value="{{isset($contrato->vlContrato) ? $contrato->vlContrato : ''}}">
</div>