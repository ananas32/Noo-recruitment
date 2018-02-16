@extends('layouts.app')

@section('body')

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-12 px-0">
        <h1 class="display-4 font-italic">AntHill Hungary</h1>
        <p>Фирма AntHill Hungary более известна в Словакии и в Венгрии. Занимается трудоустройством 12 лет.
        В Украине это первый большой наш проект, но продвигаемся очень хорошо.</p>
        <p>Что мы предлагаем:</p>
        <ol>
        <li>Абсолютно бесплатное оформление документов. Это обозначает, что из зарплаты людей тоже ничего не стягивается.</li>
        <li>Современная система поиска рабочих мест, индивидуально для каждого человека, с учетом его возможностей и желаний.</li>
        <li>Наличие большого количества рабочих мест в сферах производства, компютерной технологии, строительства и так дальше.</li>
        <li>Обеспечиваем  защиту интересов за все время рабочего стажа для каждого рабочего.(Как раньше профсоюз)</li>
        <li>Занимаемся исключительно официальными рабочими местами, все делаем легально.</li>
        <li>Не предоставляем "более дешевую" рабочую силу, все получают одинаковую зарплату,и украинские и венгерские рабочие.</li>
        <li>Чтоб устроиться на работу,достаточно иметь действующий  загранпаспорт и желание работать.</li>
        </ol>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">ГОРЯЩИЕ ВАКАНСИИ</strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="http://bootstrap-4.ru/docs/4.0/examples/blog/#">Featured post</a>
                </h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
                    additional content.</p>
                <a href="http://bootstrap-4.ru/docs/4.0/examples/blog/#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]"
                 style="width: 200px; height: 250px;"
                 src="https://www.samcodes.co.uk/project/geometrize-haxe-web/assets/images/xseagull.jpg.pagespeed.ic.iK66EGA15-.jpg"
                 data-holder-rendered="true">
        </div>
    </div>
    <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">ГОРЯЩИЕ ВАКАНСИИ</strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="http://bootstrap-4.ru/docs/4.0/examples/blog/#">Post title</a>
                </h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
                    additional content.</p>
                <a href="http://bootstrap-4.ru/docs/4.0/examples/blog/#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                 alt="Thumbnail [200x250]" src="" data-holder-rendered="true" style="width: 200px; height: 250px;">
        </div>
    </div>
</div>

<main role="main" class="container">
    <div class="row">


        <aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic">Про нас</h4>
                <p>Компания AntHill Hungary специализируется на предоставлении услуг в сфере трудоустройства за рубежом. Мы обеспечим Вас как базовой консультацией на тему трудоустройства за границей, так и поможем подписать трудовой договор с работодателем, которого Вы выберете.
                </p>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Контакты: </h4>
                <ol class="list-unstyled">
                    <li>E-mail: work.aleh@gmail.com</li>
                    <li>Cím: 8107 Bratislava, Blumentálska 5., SKCím: 9094 Tápszentmiklós, fő u. 38, HU</li>
                    <li>Tel: +380 66 267 35 28</li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->
@stop
