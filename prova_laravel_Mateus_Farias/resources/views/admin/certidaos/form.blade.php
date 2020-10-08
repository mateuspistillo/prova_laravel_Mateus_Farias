<div class="form-group">
    <label for="tipoCertidao">Tipo da Certidão</label>
    <input type="text" class="form-control" id="tipoCertidao" name="tipoCertidao" 
    value="{{isset($certidao->tipoCertidao) ? $certidao->tipoCertidao : ''}}">
</div>
<div class="form-group">
    <label for="nmEnvolvido1">Nome do Envolvido</label>
    <input type="text" class="form-control" id="nmEnvolvido1" name="nmEnvolvido1" 
    value="{{isset($certidao->nmEnvolvido1) ? $certidao->nmEnvolvido1 : ''}}">
</div>
<div class="form-group">
    <label for="nmEnvolvido2">Nome do Envolvido</label>
    <input type="text" class="form-control" id="nmEnvolvido2" name="nmEnvolvido2" 
    value="{{isset($certidao->nmEnvolvido2) ? $certidao->nmEnvolvido2 : ''}}">
</div>
<div class="form-group">
    <label for="dtCertidao">Data da Certidão</label>
    <input type="date" class="form-control" id="dtCertidao" name="dtCertidao" 
    value="{{isset($certidao->dtCertidao) ? $certidao->dtCertidao : ''}}">
</div>