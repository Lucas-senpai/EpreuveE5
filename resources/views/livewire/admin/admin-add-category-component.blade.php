<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Accueil</a>
                    <span></span> <a href="{{route('admin.categories')}}" rel="nofollow">Catégories</a>
                    <span></span> Ajouter
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Ajouter une catégorie</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.categories')}}" class="btn float-end">Toutes les catégories</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                                <form wire:submit.prevent="storeCategory">
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">Nom</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nom de la catégorie" wire:model="name" wire:keyup="generateSlug">
                                        @error('name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-label">Slug</label>
                                        <input type="text" name="slug" class="form-control" placeholder="Slug de la catégorie" wire:model="slug">
                                        @error('slug')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn float-end">Ajouter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>