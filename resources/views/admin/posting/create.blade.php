@include('template_backend.header');
      
@include('template_backend.sidebar');

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Artikel</h1>
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

            <form action="{{ route('posting.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Judul Artikel</label>
                    <input type="text" name="judul" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kategori Artikel</label>
                    <select name="category_id" class="form-control">
                        @foreach($category as $result)
                        <option value="{{ $result->id }}">{{  $result->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Pilih Tags</label>
                    <select class="form-control select2" multiple="" name="tags[]">
                      @foreach ($tags as $tag)
                          <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                      @endforeach
                      <option>Option 1</option>
                    </select>
                  </div>
                <div class="form-group">
                    <label>Isi Artikel</label>
                    <textarea name="isi" class="form-control" id="content"></textarea>
                </div>
                <div class="form-group">
                    <label>Thumbnail</label>
                    <input type="file" name="image" class="form-control">
                </div>
                {{-- <div class="form-group">
                  <label>Sumber</label>
                  <input type="text" name="sumber" class="form-control">
                </div> --}}
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
          </div>
        </section>
      </div>
      @include('template_backend.footer');
      <script>
        CKEDITOR.replace( 'content' );
      </script>
    </div>
  </div>