<?php

use Livewire\Component;

new class extends Component
{
    //
        public $faqs = [
       [
        "question"=>"What is AustadSharifi High School?",
        "answer" = >"Austad sharifi high school is a governmental (public) school that provides edcation based on Afghanistan national curriculm."
        ],
        [
            "question"=>"Who was the school named after?",
            "answer"=>"The school is named in honor of Ramazan Ali for his contriutions to education and the Hazara community ."
        ],
        [
            "question"=>"Is the school public or private?",
            "answer"=>"It is a public (qoverment-run) school."
        ],
        [
            "question"=>"What grades are taught?",
            "answer"=>"The school offers classes from primary to high school levels, depending on its structure."
        ],
        [
            "question"=>"Is education free?",
            "answer"=>"Yes, education is generally free as it a goverment school."
        ],
        [
            "question"=>"What curricuim is followed?",
            "answer"=>
        ],

    ];
    public $questionIndex = null;
    public function toggle($index){
        if($this->questionIndex ===$index){
            $this->questionIndex = null;
        }else{
            $this->questionIndex = $index;
        }
    }
}
?>

<div class="w-full grid gird-cols-2 max-w-6xl mx-auto">
    <div class="w-full col-span-1">
        <h1>Frequently Asked Questions</h1>
    </div>
    <div class="col-span-2 w-full flex flex-col items-start">
        @foreach ($this->faqs as $index=>$faq){
       <div>
        <p>{{ $faq["question"] }}</p>
        <i></i>
       </div>
        }
        @endforeach
    </div>
    {{-- Order your soul. Reduce your wants. - Augustine --}}
</div>
