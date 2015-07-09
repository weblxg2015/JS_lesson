/**
 * Created by q4156_000 on 2015/7/9.
 */
//输入下标删除
Array.prototype.del1=function(n){
    var v2 =this.slice(0,n);
    var v3 = this.slice(n+1);
    var v4 = v2.concat(v3);
    document.write(v4);
}
//输入内容删除
Array.prototype.del2=function(n){
    var v1= this.indexOf(n);
      this.splice(v1,1);
    //var v3 = this.slice(n+1);
    document.write(this);
}
//中文排序
Array.prototype.zwsort=function(){
    function fun01(a,b) {
        {
            return a.localeCompare(b);
        }
    }
    this.sort(fun01);
}

