<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador Léxico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container mt-5">

        <div class="container mt-3" style="background-color: blue; color: yellow;">
            <h1 class="text-center mb-4">Analisador Léxico</h1>

            <form id="lexicalForm">
                <div class="mb-3">
                    <label for="textInput" class="form-label">
                        <h3>Insira o texto para análise:</h3>
                    </label>
                    <textarea class="form-control" id="textInput" name="textInput" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-danger">Analisar</button>
            </form>
        </div>

        <div class="container mt-5">
            <div id="outputTable" class="mt-5" style="background-color: yellow; color: blue;">
                <h2 class="text-center mb-4">Resultado da Análise</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Token</th>
                                <th>Tipo</th>
                                <th>Posição</th>
                            </tr>
                        </thead>
                        <tbody id="outputData">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#outputTable').hide();

            $('#lexicalForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: 'analisador.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(data) {

                        if (data.error) {
                            alert(data.error);
                            return;
                        }


                        let output = '';
                        data.forEach(function(item) {
                            output += `
                            <tr>
                                <td>${item.token}</td>
                                <td>${item.tipo}</td>
                                <td>${item.posicao}</td>
                            </tr>
                        `;
                        });

                        $('#outputData').html(output);
                        $('#outputTable').show();
                    },
                    error: function(xhr, status, error) {
                        console.error('Erro ao processar a análise:', error);
                        alert('Ocorreu um erro ao processar a análise. Por favor, tente novamente.');
                    }
                });
            });
        });
    </script>
</body>

</html>