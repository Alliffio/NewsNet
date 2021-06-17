@include('template_backend.header');
      
@include('template_backend.sidebar');

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Edit Kategori</h1>
          </div>

          <div class="section-body">
            {{-- content --}}

            @if (count($errors)>0)
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
                @endforeach
            @endif

            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session('success') }}
                </div>
            @endif

            <form action="{{ route('category.update' , $category->id )}}" method="POST">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Edit</button>
                </div>
            </form>
          </div>
        </section>
      </div>
      @include('template_backend.footer');
    </div>
  </div>