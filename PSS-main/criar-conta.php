<!DOCTYPE html>
<html lang="pt-br">

<?php
include "headHTML.php"
?>

<body>
    <main class="main">
        <div class="container" id="form-principal">
            <h1>Formulário de inscrição</h1>
            <form action="cadastro-usuario.php" method="POST">
                <div class="mb-3">
                    <label for="form-nome-completo" class="form-label">Nome completo:</label>
                    <input type="text" class="form-control" id="form-nome-completo" name="form-nome-completo" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-data-nascimento" class="form-label">Data de nascimento:</label>
                    <input type="date" class="form-control" id="form-data-nascimento" name="form-data-nascimento" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-cpf" class="form-cpf">CPF:</label>
                    <input type="text" class="form-control" id="form-cpf" name="form-cpf" placeholder="000.000.000-00" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-rg" class="form-label">RG:</label>
                    <input type="text" class="form-control" id="form-rg" name="form-rg" placeholder="00.000.000-0" > <!--required-->
                </div>
                <label for="form-naturalidade" class="form-label">Estado do rg:</label>
                <select class="form-select mb-3" id="form-estado-rg" name="form-estado-rg" > <!--required-->
                    <option selected>Selecione</option>
                    <option value="1">Acre(AC)</option>
                    <option value="2">Alagoas(AL)</option>
                    <option value="3">Amapá(Ap)</option>
                    <option value="4">Bahia(BA)</option>
                    <option value="5">Ceará(CE)</option>
                    <option value="5">Distrito Federal(DF)</option>
                    <option value="5">Espírito Santo(ES)</option>
                    <option value="5">Goás(GO)</option>
                    <option value="5">Maranhão(MA)</option>
                    <option value="5">Mato Grosso(MT)</option>
                    <option value="5">Mato Grosso do Sul(MS)</option>
                    <option value="5">Minas Gerai(MG)</option>
                    <option value="5">Pará(PA)</option>
                    <option value="5">Paraíba(PB)</option>
                    <option value="5">Paraná(PR)</option>
                    <option value="5">Pernambuco(PE)</option>
                    <option value="5">Piauí(PI)</option>
                    <option value="5">Rio de Janeiro(RJ)</option>
                    <option value="5">Rio Grande do Norte(RN)</option>
                    <option value="5">Rio Grande do Sul(RS)</option>
                    <option value="5">Rondônia(RO)</option>
                    <option value="5">Roraima(RR)</option>
                    <option value="5">Santa Catarina(SC)</option>
                    <option value="5">São Paulo(SP)</option>
                    <option value="5">Sergipe(SE)</option>
                    <option value="5">Tocantins(TO)</option>
                </select>
                <div class="mb-3">
                    <label for="form-cep" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="form-email" name="form-email" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-cep" class="form-label">Sexo:</label>
                    <select class="form-select col-3" id="form-sexo" name="form-sexo">
                        <option selected>Selecione</option>
                        <option value="1">Masculino</option>
                        <option value="2">Feminino</option>
                    </select>
                </div>
                <label for="form-naturalidade" class="form-label">Canhoto:</label>
                <select class="form-select mb-3" id="form-canhoto" name="form-canhoto" > <!--required-->
                    <option selected>Selecione</option>
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
                <label for="form-estado-civil" class="form-estado-civil">Estado Civil:</label>
                <select class="form-select col-3" id="form-estado-civil" name="form-estado-civil">
                    <option selected>Selecione</option>
                    <option value="1">Solteiro</option>
                    <option value="2">Casado</option>
                    <option value="3">Separado</option>
                    <option value="4">Divorciado</option>
                    <option value="5">Viúvo</option>
                </select>
                <div class="mb-3">
                    <label for="form-nome-mae" class="form-nome-mae">Nome da Mãe:</label>
                    <input type="text" class="form-control" id="form-nome-mae" name="form-nome-mae" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-nome-pai" class="form-nome-pai">Nome do Pai:</label>
                    <input type="text" class="form-control" id="form-nome-pai" name="form-nome-pai">
                </div>
                <div class="mb-3">
                    <label for="form-telefone" class="form-telefone">Telefone:</label>
                    <input type="number" class="form-control" id="form-telefone" name="form-telefone">
                </div>
                <div class="mb-3">
                    <label for="form-celular" class="form-celular">Celular:</label>
                    <input type="number" class="form-control" id="form-celular" name="form-celular" requierd>
                </div>
                <div class="mb-3">
                    <label for="form-nacionalidade" class="form-nacionalidade">Nacionalidade:</label>
                    <select class="form-select col-3" id="form-nacionalidade" name="form-nacionalidade" > <!--required-->
                        <option value="Brasil" selected="selected">Brasil</option>
                        <option value="Afeganistão">Afeganistão</option>
                        <option value="África do Sul">África do Sul</option>
                        <option value="Albânia">Albânia</option>
                        <option value="Alemanha">Alemanha</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antilhas Holandesas">Antilhas Holandesas</option>
                        <option value="Antárctida">Antárctida</option>
                        <option value="Antígua e Barbuda">Antígua e Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Argélia">Argélia</option>
                        <option value="Armênia">Armênia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Arábia Saudita">Arábia Saudita</option>
                        <option value="Austrália">Austrália</option>
                        <option value="Áustria">Áustria</option>
                        <option value="Azerbaijão">Azerbaijão</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrein">Bahrein</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belize">Belize</option>
                        <option value="Benim">Benim</option>
                        <option value="Bermudas">Bermudas</option>
                        <option value="Bielorrússia">Bielorrússia</option>
                        <option value="Bolívia">Bolívia</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgária">Bulgária</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Butão">Butão</option>
                        <option value="Bélgica">Bélgica</option>
                        <option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Camarões">Camarões</option>
                        <option value="Camboja">Camboja</option>
                        <option value="Canadá">Canadá</option>
                        <option value="Catar">Catar</option>
                        <option value="Cazaquistão">Cazaquistão</option>
                        <option value="Chade">Chade</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Chipre">Chipre</option>
                        <option value="Colômbia">Colômbia</option>
                        <option value="Comores">Comores</option>
                        <option value="Coreia do Norte">Coreia do Norte</option>
                        <option value="Coreia do Sul">Coreia do Sul</option>
                        <option value="Costa do Marfim">Costa do Marfim</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croácia">Croácia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Dinamarca">Dinamarca</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Egito">Egito</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
                        <option value="Equador">Equador</option>
                        <option value="Eritreia">Eritreia</option>
                        <option value="Escócia">Escócia</option>
                        <option value="Eslováquia">Eslováquia</option>
                        <option value="Eslovênia">Eslovênia</option>
                        <option value="Espanha">Espanha</option>
                        <option value="Estados Federados da Micronésia">Estados Federados da Micronésia</option>
                        <option value="Estados Unidos">Estados Unidos</option>
                        <option value="Estônia">Estônia</option>
                        <option value="Etiópia">Etiópia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Filipinas">Filipinas</option>
                        <option value="Finlândia">Finlândia</option>
                        <option value="França">França</option>
                        <option value="Gabão">Gabão</option>
                        <option value="Gana">Gana</option>
                        <option value="Geórgia">Geórgia</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Granada">Granada</option>
                        <option value="Gronelândia">Gronelândia</option>
                        <option value="Grécia">Grécia</option>
                        <option value="Guadalupe">Guadalupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernesei">Guernesei</option>
                        <option value="Guiana">Guiana</option>
                        <option value="Guiana Francesa">Guiana Francesa</option>
                        <option value="Guiné">Guiné</option>
                        <option value="Guiné Equatorial">Guiné Equatorial</option>
                        <option value="Guiné-Bissau">Guiné-Bissau</option>
                        <option value="Gâmbia">Gâmbia</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungria">Hungria</option>
                        <option value="Ilha Bouvet">Ilha Bouvet</option>
                        <option value="Ilha de Man">Ilha de Man</option>
                        <option value="Ilha do Natal">Ilha do Natal</option>
                        <option value="Ilha Heard e Ilhas McDonald">Ilha Heard e Ilhas McDonald</option>
                        <option value="Ilha Norfolk">Ilha Norfolk</option>
                        <option value="Ilhas Cayman">Ilhas Cayman</option>
                        <option value="Ilhas Cocos (Keeling)">Ilhas Cocos (Keeling)</option>
                        <option value="Ilhas Cook">Ilhas Cook</option>
                        <option value="Ilhas Feroé">Ilhas Feroé</option>
                        <option value="Ilhas Geórgia do Sul e Sandwich do Sul">Ilhas Geórgia do Sul e Sandwich do Sul</option>
                        <option value="Ilhas Malvinas">Ilhas Malvinas</option>
                        <option value="Ilhas Marshall">Ilhas Marshall</option>
                        <option value="Ilhas Menores Distantes dos Estados Unidos">Ilhas Menores Distantes dos Estados Unidos</option>
                        <option value="Ilhas Salomão">Ilhas Salomão</option>
                        <option value="Ilhas Virgens Americanas">Ilhas Virgens Americanas</option>
                        <option value="Ilhas Virgens Britânicas">Ilhas Virgens Britânicas</option>
                        <option value="Ilhas Åland">Ilhas Åland</option>
                        <option value="Indonésia">Indonésia</option>
                        <option value="Inglaterra">Inglaterra</option>
                        <option value="Índia">Índia</option>
                        <option value="Iraque">Iraque</option>
                        <option value="Irlanda do Norte">Irlanda do Norte</option>
                        <option value="Irlanda">Irlanda</option>
                        <option value="Irã">Irã</option>
                        <option value="Islândia">Islândia</option>
                        <option value="Israel">Israel</option>
                        <option value="Itália">Itália</option>
                        <option value="Iêmen">Iêmen</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japão">Japão</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordânia">Jordânia</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Laos">Laos</option>
                        <option value="Lesoto">Lesoto</option>
                        <option value="Letônia">Letônia</option>
                        <option value="Libéria">Libéria</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lituânia">Lituânia</option>
                        <option value="Luxemburgo">Luxemburgo</option>
                        <option value="Líbano">Líbano</option>
                        <option value="Líbia">Líbia</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedônia">Macedônia</option>
                        <option value="Madagáscar">Madagáscar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldivas">Maldivas</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Malásia">Malásia</option>
                        <option value="Marianas Setentrionais">Marianas Setentrionais</option>
                        <option value="Marrocos">Marrocos</option>
                        <option value="Martinica">Martinica</option>
                        <option value="Mauritânia">Mauritânia</option>
                        <option value="Maurícia">Maurícia</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Moldávia">Moldávia</option>
                        <option value="Mongólia">Mongólia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Moçambique">Moçambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="México">México</option>
                        <option value="Mônaco">Mônaco</option>
                        <option value="Namíbia">Namíbia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Nicarágua">Nicarágua</option>
                        <option value="Nigéria">Nigéria</option>
                        <option value="Niue">Niue</option>
                        <option value="Noruega">Noruega</option>
                        <option value="Nova Caledônia">Nova Caledônia</option>
                        <option value="Nova Zelândia">Nova Zelândia</option>
                        <option value="Níger">Níger</option>
                        <option value="Omã">Omã</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestina">Palestina</option>
                        <option value="Panamá">Panamá</option>
                        <option value="Papua-Nova Guiné">Papua-Nova Guiné</option>
                        <option value="Paquistão">Paquistão</option>
                        <option value="Paraguai">Paraguai</option>
                        <option value="País de Gales">País de Gales</option>
                        <option value="Países Baixos">Países Baixos</option>
                        <option value="Peru">Peru</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Polinésia Francesa">Polinésia Francesa</option>
                        <option value="Polônia">Polônia</option>
                        <option value="Porto Rico">Porto Rico</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Quirguistão">Quirguistão</option>
                        <option value="Quênia">Quênia</option>
                        <option value="Reino Unido">Reino Unido</option>
                        <option value="República Centro-Africana">República Centro-Africana</option>
                        <option value="República Checa">República Checa</option>
                        <option value="República Democrática do Congo">República Democrática do Congo</option>
                        <option value="República do Congo">República do Congo</option>
                        <option value="República Dominicana">República Dominicana</option>
                        <option value="Reunião">Reunião</option>
                        <option value="Romênia">Romênia</option>
                        <option value="Ruanda">Ruanda</option>
                        <option value="Rússia">Rússia</option>
                        <option value="Saara Ocidental">Saara Ocidental</option>
                        <option value="Saint Martin">Saint Martin</option>
                        <option value="Saint-Barthélemy">Saint-Barthélemy</option>
                        <option value="Saint-Pierre e Miquelon">Saint-Pierre e Miquelon</option>
                        <option value="Samoa Americana">Samoa Americana</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Santa Helena, Ascensão e Tristão da Cunha">Santa Helena, Ascensão e Tristão da Cunha</option>
                        <option value="Santa Lúcia">Santa Lúcia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serra Leoa">Serra Leoa</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Singapura">Singapura</option>
                        <option value="Somália">Somália</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Suazilândia">Suazilândia</option>
                        <option value="Sudão">Sudão</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Suécia">Suécia</option>
                        <option value="Suíça">Suíça</option>
                        <option value="Svalbard e Jan Mayen">Svalbard e Jan Mayen</option>
                        <option value="São Cristóvão e Nevis">São Cristóvão e Nevis</option>
                        <option value="São Marino">São Marino</option>
                        <option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
                        <option value="São Vicente e Granadinas">São Vicente e Granadinas</option>
                        <option value="Sérvia">Sérvia</option>
                        <option value="Síria">Síria</option>
                        <option value="Tadjiquistão">Tadjiquistão</option>
                        <option value="Tailândia">Tailândia</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tanzânia">Tanzânia</option>
                        <option value="Terras Austrais e Antárticas Francesas">Terras Austrais e Antárticas Francesas</option>
                        <option value="Território Britânico do Oceano Índico">Território Britânico do Oceano Índico</option>
                        <option value="Timor-Leste">Timor-Leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Toquelau">Toquelau</option>
                        <option value="Trinidad e Tobago">Trinidad e Tobago</option>
                        <option value="Tunísia">Tunísia</option>
                        <option value="Turcas e Caicos">Turcas e Caicos</option>
                        <option value="Turquemenistão">Turquemenistão</option>
                        <option value="Turquia">Turquia</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Ucrânia">Ucrânia</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Uruguai">Uruguai</option>
                        <option value="Uzbequistão">Uzbequistão</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vaticano">Vaticano</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietname">Vietname</option>
                        <option value="Wallis e Futuna">Wallis e Futuna</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                        <option value="Zâmbia">Zâmbia</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="form-naturalidade" class="form-label">Naturalidade:</label>
                    <select class="form-select mb-3" id="form-naturalidade" name="form-naturalidade" > <!--required-->
                        <option selected>Selecione</option>
                        <option value="1">Acre(AC)</option>
                        <option value="2">Alagoas(AL)</option>
                        <option value="3">Amapá(Ap)</option>
                        <option value="4">Bahia(BA)</option>
                        <option value="5">Ceará(CE)</option>
                        <option value="5">Distrito Federal(DF)</option>
                        <option value="5">Espírito Santo(ES)</option>
                        <option value="5">Goás(GO)</option>
                        <option value="5">Maranhão(MA)</option>
                        <option value="5">Mato Grosso(MT)</option>
                        <option value="5">Mato Grosso do Sul(MS)</option>
                        <option value="5">Minas Gerai(MG)</option>
                        <option value="5">Pará(PA)</option>
                        <option value="5">Paraíba(PB)</option>
                        <option value="5">Paraná(PR)</option>
                        <option value="5">Pernambuco(PE)</option>
                        <option value="5">Piauí(PI)</option>
                        <option value="5">Rio de Janeiro(RJ)</option>
                        <option value="5">Rio Grande do Norte(RN)</option>
                        <option value="5">Rio Grande do Sul(RS)</option>
                        <option value="5">Rondônia(RO)</option>
                        <option value="5">Roraima(RR)</option>
                        <option value="5">Santa Catarina(SC)</option>
                        <option value="5">São Paulo(SP)</option>
                        <option value="5">Sergipe(SE)</option>
                        <option value="5">Tocantins(TO)</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="form-cep" class="form-label">CEP:</label>
                    <input type="text" class="form-control" id="form-cep" name="form-cep" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-rua" class="form-label">Rua:</label>
                    <input type="text" class="form-control" id="form-rua" name="form-rua" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-numero-da-casa" class="form-label">Número da casa:</label>
                    <input type="text" class="form-control" id="form-numero-da-casa" name="form-numero-da-casa" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-complemento" class="form-label">Complemento:</label>
                    <input type="text" class="form-control" id="form-complemento" name="form-complemento" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-bairro" class="form-label">Bairro:</label>
                    <input type="text" class="form-control" id="form-bairro" name="form-bairro" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-cidade" class="form-label">Cidade:</label>
                    <input type="text" class="form-control" id="form-cidade" name="form-cidade" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-uf" class="form-label">UF:</label>
                    <input type="text" class="form-control" id="form-uf" name="form-uf" > <!--required-->
                </div>
                <div class="mb-3">
                    <label for="form-senha" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="form-senha" name="form-senha" > <!--required-->
                </div>
                <input class="btn btn-primary enviar-btn" name="criar-conta" type="submit" value="Criar conta">
            </form>
        </div>
    </main>

    <?php
    include "cadastro-usuario.php";
    ?>

    <script src="js/script.js"></script>
</body>

</html>