@php
    $tools = \Illuminate\Support\Facades\DB::select("SELECT * FROM tools WHERE ordem_visualizacao != 0 ORDER BY ordem_visualizacao");
    $toolsCount = count($tools);
@endphp

<div class="dropdown d-none d-lg-inline-block ms-1">
    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="bx bx-customize"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
        <div class="px-lg-2">
            <div class="row">

                @if($toolsCount == 0)
                    <div class="col">Nenhuma Ferramenta encontrada.</div>
                @else
                    @php
                        $qtdReg = 0;
                    @endphp

                    @foreach($tools as $key => $tool)
                        @php
                            $qtdReg++;

                            //Dados da Tool
                            $name = $tool->name;
                            $descricao = $tool->descricao;
                            $url = $tool->url;
                            $icon = $tool->icon;
                        @endphp

                        <div class="col-6">
                            <a class="dropdown-icon-item" href="{{ route($tool->url) }}"><i class="{{ $tool->icon }} fa-2x"></i><span class="px-2">{{ $tool->name }}</span></a>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
</div>
