<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\job;
class Updatejobs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updatejobs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update each job set is disactive';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
    $jobs=get_cols_where_limit(new job(),array("id"),array("active"=>1),'id','ASC',100000);  
   if(!empty( $jobs)){
    foreach( $jobs as $info){
        $dataUpdate['active']=0;
        update(new job(),$dataUpdate,array('id'=>$info->id));
    }
   }



    }
}
