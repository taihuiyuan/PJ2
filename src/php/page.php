<?php
//include 'config.php';
class page{
    private $myde_total;//总记录数
    private $myde_size;//一页显示的记录数
    private $myde_page;//当前页
    private $myde_page_count;//总页数
    private $myde_i;//起头页数
    private $myde_en;//结尾页数
    private $myde_url;//获取当前url

    private $show_pages;//页面显示的格式，显示页数为2*$show_pages+1
    public function  __construct($myde_total = 1,$myde_size=1,$myde_page=1,$myde_url,$show_pages=2){
        $this->myde_total = $this->numeric($myde_total);
        $this->myde_size = $this->numeric($myde_size);
        $this->myde_page = $this->numeric($myde_page);
        $this->myde_page_count = ceil($this->myde_total / $this->myde_size);
        $this->myde_url = $myde_url;
        if ($this->myde_total<0){
            $this->myde_total=0;
        }
        if ($this->myde_page<1){
            $this->myde_page=1;
        }
        if ($this->myde_page_count<1){
            $this->myde_page_count=1;
        }
        if ($this->myde_page>$this->myde_page_count){
            $this->myde_page = $this->myde_page_count;
        }
        $this->limit = ($this->myde_page-1)*$this->myde_size;
        $this->myde_i = $this->myde_page - $show_pages;
        $this->myde_i = $this->myde_page - $show_pages;
        if ($this->myde_i<1){
            $this->myde_en = $this->myde_en + (1-$this->myde_i);
            $this->myde_i = 1;
        }
        if ($this->myde_en > $this->myde_page_count){
            $this->myde_i = $this->myde_i - ($this->myde_en - $this->myde_page_count);
            $this->myde_en = $this->myde_page_count;
        }
        if ($this->myde_i<1){
            $this->myde_i=1;
        }
    }

    //检测是否是数字
    private function numeric($num){
        if (strlen(($num))){
            if (!preg_match("/^[0-9]+$/",$num)){
                $num = 1;
            }else{
                $num = substr($num,0,11);
            }
        }else{
            $num = 1;
        }
        return $num;
    }

    //地址替换
    private function page_replace($page){
        return str_replace("{page}",$page,$this->myde_url);
    }

    //上一页
    private function myde_prev_refresh(){
        if ($this->myde_page != 1){
            $this->page_replace($this->myde_page-1);
            return "<a onclick='refresh()' title='上一页'><</a>";
        }else{
            return null;
        }
    }
    private function myde_prev_href(){
        if ($this->myde_page != 1){
            return "<a href='".$this->page_replace($this->myde_page-1)."' title='上一页'><</a>";
        }else{
            return null;
        }
    }

    //下一页
    private function myde_next_refresh(){
        if ($this->myde_page_count > 5) {
            if ($this->myde_page != 5) {
                $this->page_replace($this->myde_page + 1);
                return "<a title='下一页' onclick='refresh()'>></a>";
            } else {
                return null;
            }
        }else{
            if ($this->myde_page != $this->myde_page_count) {
                return "<a title='下一页' onclick='refresh()'>></a>";
            } else {
                return null;
            }
        }
    }
    private function myde_next_href(){
        if ($this->myde_page_count > 5) {
            if ($this->myde_page != 5) {
                return "<a title='下一页' href='".$this->page_replace($this->myde_page + 1)."'>></a>";
            } else {
                return null;
            }
        }else{
            if ($this->myde_page != $this->myde_page_count) {
                return "<a href='" . $this->page_replace($this->myde_page + 1) . "' title='下一页' >></a>";
            } else {
                return null;
            }
        }
    }

    //输出
    public function myde_write_refresh(){
    $id = 'page';
    $str = "<div class=".$id.">";
    $str .=$this->myde_prev_refresh();
    if ($this->myde_i > 1){
        $str .= "<p class='pageEllipsis'>...</p>";
    }
    for ($i = $this->myde_i;$i <= $this->myde_page_count;$i++){
        if ($i == $this->myde_page){
            $this->page_replace($i);
            $str .= "<a title='第".$i."页' class='cur' onclick='refresh()' id='".$i."'>$i</a>";
        }else if ($i <= 5){
            $this->page_replace($i);
            $str .= "<a title='第".$i."页' onclick='refresh()' id='".$i."'>$i</a>";
        }
    }
    $str .= $this->myde_next_refresh();
    $str .= "</div>";

    return $str;
}
    public function myde_write_href(){
        $id = 'page';
        $str = "<div class=".$id.">";
        $str .=$this->myde_prev_href();
        if ($this->myde_i > 1){
            $str .= "<p class='pageEllipsis'>...</p>";
        }
        for ($i = $this->myde_i;$i <= $this->myde_page_count;$i++){
            if ($i == $this->myde_page){
                $str .= "<a href = '".$this->page_replace($i)."' title='第".$i."页' class='cur'>$i</a>";
            }else if ($i <= 5){
                $str .= "<a title='第".$i."页' href='".$this->page_replace($i)."'>$i</a>";
            }
        }
        $str .= $this->myde_next_href();
        $str .= "</div>";

        return $str;
    }
}
?>