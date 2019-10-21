
@extends ('layout')

@section ('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>Articles</h2>
			  <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
          @foreach ($articles as $article)
              <h3><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h3>
              <p>{{ $article->excerpt }}</p>
          @endforeach
        </table>
      </div>
		</div>
	</div>
</div>
@endsection
