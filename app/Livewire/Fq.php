<!-- <?php

namespace App\Livewire;

use Livewire\Component;

class Fq extends Component
{
    public function render(
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
    )
    {

        return view('livewire.fq');
    }
} -->
