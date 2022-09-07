<div class="sidebar">
    <div class="sidebar-wrapper">
        
        <ul class="nav">
            
            <li>
                <a data-toggle="collapse" href="#Denizen" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Moradores') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="Denizen">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'denizens') class="active " @endif>
                            <a href="#">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ _('Lista') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'cdenizens') class="active " @endif>
                            <a href="#">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('Nuevo') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#Lends" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Canchas') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="Lends">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'ilends') class="active " @endif>
                            <a href="#">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ _('Lista') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'clends') class="active " @endif>
                            <a href="#">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('Nuevo') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#Sunscribe" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Cursos') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="Sunscribe">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'isubscribes') class="active " @endif>
                            <a href="#">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ _('Lista') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'csubscribes') class="active " @endif>
                            <a href="#">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('Nuevo') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
