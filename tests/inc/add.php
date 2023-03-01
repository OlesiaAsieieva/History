<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Перевірка знань</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="col-md-6">
    <form action="admin.php?do=save" method="post">
        <div class="card mt-4">
            <div class="card-header">
                <h2 class="text-center">Додавання тесту</h2>
            </div>

            <div class="card-body">
                <div>
                    <label for="title" class="form-label">Назва тесту</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mt-5 text-center">
                    <h4>Додавання запитань</h4>
                </div>
                <div class="questions">
                    <div class="question-items">
                        <div class="mt-4">
                            <label for="question_1" class="form-label">Запитання</label>
                            <input type="text" name="question_1" id="question_1" class="form-control">
                            <div class="answers">
                                <div class="answer-items">
                                    <div>
                                        <label for="answer_text_1_1" class="form-label">Відповідь</label>
                                        <input type="text" name="answer_text_1_1" id="answer_text_1_1" class="form-control">
                                    </div>
                                    <div class="mt-2">
                                        <label for="answer_score_1_1" class="form-label">Бал за запитання</label>
                                        <input type="text" name="answer_score_1_1" id="answer_score_1_1" class="form-control">
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="button" class="btn btn-light border addAnswer" data-question="1" data-answer="1">Добавить вариант ответа</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary addQuestion">Додати запитання</button>
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <h4>Додавання результатів</h4>
                </div>
                <div class="results">
                    <div class="result-items">
                        <div class="mt-4">
                            <div class="">
                                <label for="result_1" class="form-label">Результат</label>
                                <textarea name="result_1" id="result_1" class="form-control"></textarea>
                            </div>
                            <div class="mt-2">
                                <label for="result_score_min_1" class="form-label">Бал (від)</label>
                                <input type="text" name="result_score_min_1" id="result_score_min_1" class="form-control">
                            </div>
                            <div class="mt-2">
                                <label for="result_score_max_1" class="form-label">Бал (до)</label>
                                <input type="text" name="result_score_max_1" id="result_score_max_1" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary addResult" >Додати результат</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4 mb-4">
            <div class="card-body text-center">
                <button type="submit" class="btn btn-success">Зберегти</button>
            </div>
        </div>
    </body>
    </form>
</div>