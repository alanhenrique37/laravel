<x-layout titulo="Cadastrar">
    <form action= "cadastrar/salvar" method="GET">
        @csrf <!--Abrir a porta dos servidores-->
        <label name="DataCompromisso"> Data Compromisso </label>
        <input type="date" name="dataEvento"></br></br>

        <label name="descricao">Descrição</label>
        <textArea type="text" name="descricaoTexto"></textArea>
        </br></br>
        <button type="submit">Salvar</button>
    </form>

    <a href="/"><button>Voltar</button></a>



</x-layout>