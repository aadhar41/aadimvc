<?php

    class Pages extends Controller
    {
        public function __construct(Type $var = null) {
            $this->var = $var;
        }

        public function index() {
            $data = [
                'title' => 'Welcome'
            ];

            $this->view('pages/index', $data);
        }

        public function about()
        {
            $data = [
                'title' => 'About US'
            ];
            $this->view('pages/about', $data);
        }
    }
    
