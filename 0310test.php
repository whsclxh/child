<?php session_start(); ?>
<?php
include("mysql_connect.php"); 
if($_SESSION['username'] == null){
    echo "<script>alert('您尚未登入!');</script>";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Home.php>';
}
$id = $_SESSION['username'];
$sql10 = "SELECT * FROM users where username = '$id'";
$result10 = mysqli_query($qaq,$sql10);
$d3_use= @mysqli_fetch_row($result10);
?>
<!DOCTYPE html>
<meta charset="utf-8">
<style>
html{
    
    width: 100%;
}
body {

  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
#all_site {
    width: 100%;
    height: 100%;
    margin:0 auto;
}
#header {
    background-color: pink;
    width: 100%;
    height: 50%;
}
#sidebar_1 {
　  background-color: red;
    width: 50%;
    height: 50%;
    display: inline;
    float: left;
}
#sidebar_2 {
　  background-color: red;
    width: 50%;
    height: 50%;
    display: inline;
    float: left;
}
#sidebar_3 {
　  background-color: red;
    width: 50%;
    height: 50%;
    display: inline;
    float: left;
}
#sidebar_4 {
　  background-color: red;
    width: 50%;
    height: 50%;
    display: inline;
    float: left;
}
svg {
    width: 70%;
    height: 80%;
    display: block;
    margin: auto;
}

path.slice{
    stroke-width:2px;
}

polyline{
    opacity: .3;
    stroke: black;
    stroke-width: 2px;
    fill: none;
}

</style>
<body>
<div id="all_site">
<div id="header"><h2 align="center">各項作答次數</h2></div>
<div id="sidebar_1" style="background-color: #FFECC9"><h2 align="center">數學答對率</h2></div>
<div id="sidebar_2" style="background-color: #F2FFF2"><h2 align="center">認知答對率</h2></div>
<div id="sidebar_3" style="background-color: #FDF5E6"><h2 align="center">國語答對率</h2></div>
<div id="sidebar_4" style="background-color: #87CEEB"><h2 align="center">時鐘答對率</h2></div>
</div>
<script src="http://d3js.org/d3.v3.min.js"></script>
<script>

var svg = d3.select("body")
    .select("#header")
    .append("svg")
    .append("g")

svg.append("g")
    .attr("class", "slices");
svg.append("g")
    .attr("class", "labels");
svg.append("g")
    .attr("class", "lines");

var width = 1200,
    height = 300,
    radius = Math.min(width, height) / 2;

var pie = d3.layout.pie()
    .sort(null)
    .value(function(d) {
        return d.value;
    });

var arc = d3.svg.arc()
    .outerRadius(radius * 0.8)
    .innerRadius(radius * 0.4);

var outerArc = d3.svg.arc()
    .innerRadius(radius * 0.9)
    .outerRadius(radius * 0.9);

svg.attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

var key = function(d){ return d.data.label; };

var color = d3.scale.ordinal()
    .domain(["ㄅㄆㄇ", "1 2 3", "認知", "時鐘"])
    .range(["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00"]);

function randomData (){
    var labels = color.domain();
    return labels.map(function(label,value){
        if(label=="ㄅㄆㄇ"){
            return {label: "ㄅㄆㄇ : <?php echo "$d3_use[5]"; ?> 次", value: <?php echo "$d3_use[5]"; ?>}
        }else if(label=="1 2 3"){
            return {label: "1 2 3 : <?php echo "$d3_use[6]"; ?> 次", value: <?php echo "$d3_use[6]"; ?>}
        }else if(label=="認知"){
            return {label: "認知 : <?php echo "$d3_use[7]"; ?> 次", value: <?php echo "$d3_use[7]"; ?>}
        }else{
            return {label: "時鐘 : <?php echo "$d3_use[8]"; ?> 次", value: <?php echo "$d3_use[8]"; ?>}
        }
    });
}

change(randomData());

d3.select(".randomize")
    .on("click", function(){
        change(randomData());
    });
var math_svg = d3.select("body")
    .select("#sidebar_1")
    .append("svg")
    .append("g")

math_svg.append("g")
    .attr("class", "slices");
math_svg.append("g")
    .attr("class", "labels");
math_svg.append("g")
    .attr("class", "lines");

var math_width = 600,
    math_height = 300,
    math_radius = Math.min(math_width, math_height) / 2;

var pie = d3.layout.pie()
    .sort(null)
    .value(function(d) {
        return d.value;
    });

var math_arc = d3.svg.arc()
    .outerRadius(math_radius * 0.5)
    .innerRadius(math_radius * 0.2);

var math_outerArc = d3.svg.arc()
    .innerRadius(math_radius * 0.7)
    .outerRadius(math_radius * 0.7);

math_svg.attr("transform", "translate(" + math_width / 2 + "," + math_height / 2 + ")");

var math_key = function(d){ return d.data.label; };

var math_color = d3.scale.ordinal()
    .domain(["答對","答錯"])
    .range(["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00"]);

function math_randomData (){
    var math_labels = math_color.domain();
    return math_labels.map(function(label,value){
        if(label=="答對"){
            return {label: "答對 : <?php echo "83"; ?> 題", value: <?php echo "83"; ?>}
        }else{
            return {label: "答錯 : <?php echo "102"; ?> 題", value: <?php echo "102"; ?>}
        }
    });
}
math_change(math_randomData());

d3.select(".randomize")
    .on("click", function(){
        math_change(math_randomData());
    });
    var cog_svg = d3.select("body")
    .select("#sidebar_2")
    .append("svg")
    .append("g")

cog_svg.append("g")
    .attr("class", "slices");
cog_svg.append("g")
    .attr("class", "labels");
cog_svg.append("g")
    .attr("class", "lines");

var cog_width = 600,
    cog_height = 300,
    cog_radius = Math.min(cog_width, cog_height) / 2;

var pie = d3.layout.pie()
    .sort(null)
    .value(function(d) {
        return d.value;
    });

var cog_arc = d3.svg.arc()
    .outerRadius(cog_radius * 0.5)
    .innerRadius(cog_radius * 0.2);

var cog_outerArc = d3.svg.arc()
    .innerRadius(cog_radius * 0.7)
    .outerRadius(cog_radius * 0.7);

cog_svg.attr("transform", "translate(" + cog_width / 2 + "," + cog_height / 2 + ")");

var cog_key = function(d){ return d.data.label; };

var cog_color = d3.scale.ordinal()
    .domain(["答對","答錯"])
    .range(["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00"]);

function cog_randomData (){
    var cog_labels = cog_color.domain();
    return cog_labels.map(function(label,value){
        if(label=="答對"){
            return {label: "答對 : <?php echo "55"; ?> 題", value: <?php echo "55"; ?>}
        }else{
            return {label: "答錯 : <?php echo "172"; ?> 題", value: <?php echo "172"; ?>}
        }
    });
}
cog_change(cog_randomData());

d3.select(".randomize")
    .on("click", function(){
        cog_change(cog_randomData());
    });
var chi_svg = d3.select("body")
    .select("#sidebar_3")
    .append("svg")
    .append("g")

chi_svg.append("g")
    .attr("class", "slices");
chi_svg.append("g")
    .attr("class", "labels");
chi_svg.append("g")
    .attr("class", "lines");

var chi_width = 600,
    chi_height = 300,
    chi_radius = Math.min(chi_width, chi_height) / 2;

var pie = d3.layout.pie()
    .sort(null)
    .value(function(d) {
        return d.value;
    });

var chi_arc = d3.svg.arc()
    .outerRadius(chi_radius * 0.5)
    .innerRadius(chi_radius * 0.2);

var chi_outerArc = d3.svg.arc()
    .innerRadius(chi_radius * 0.7)
    .outerRadius(chi_radius * 0.7);

chi_svg.attr("transform", "translate(" + chi_width / 2 + "," + chi_height / 2 + ")");

var chi_key = function(d){ return d.data.label; };

var chi_color = d3.scale.ordinal()
    .domain(["答對","答錯"])
    .range(["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00"]);

function chi_randomData (){
    var chi_labels = chi_color.domain();
    return chi_labels.map(function(label,value){
        if(label=="答對"){
            return {label: "答對 : <?php echo "125"; ?> 題", value: <?php echo "125"; ?>}
        }else{
            return {label: "答錯 : <?php echo "0"; ?> 題", value: <?php echo "0"; ?>}
        }
    });
}
chi_change(chi_randomData());

d3.select(".randomize")
    .on("click", function(){
        chi_change(chi_randomData());
    });
var clock_svg = d3.select("body")
    .select("#sidebar_4")
    .append("svg")
    .append("g")

clock_svg.append("g")
    .attr("class", "slices");
clock_svg.append("g")
    .attr("class", "labels");
clock_svg.append("g")
    .attr("class", "lines");

var clock_width = 600,
    clock_height = 300,
    clock_radius = Math.min(clock_width, clock_height) / 2;

var pie = d3.layout.pie()
    .sort(null)
    .value(function(d) {
        return d.value;
    });

var clock_arc = d3.svg.arc()
    .outerRadius(clock_radius * 0.5)
    .innerRadius(clock_radius * 0.2);

var clock_outerArc = d3.svg.arc()
    .innerRadius(clock_radius * 0.7)
    .outerRadius(clock_radius * 0.7);

clock_svg.attr("transform", "translate(" + clock_width / 2 + "," + clock_height / 2 + ")");

var clock_key = function(d){ return d.data.label; };

var clock_color = d3.scale.ordinal()
    .domain(["答對","答錯"])
    .range(["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00"]);

function clock_randomData (){
    var clock_labels = clock_color.domain();
    return clock_labels.map(function(label,value){
        if(label=="答對"){
            return {label: "答對 : <?php echo "25"; ?> 題", value: <?php echo "25"; ?>}
        }else{
            return {label: "答錯 : <?php echo "4"; ?> 題", value: <?php echo "4"; ?>}
        }
    });
}
clock_change(clock_randomData());

d3.select(".randomize")
    .on("click", function(){
        clock_change(clock_randomData());
    });
function change(data) {

    /* ------- PIE SLICES -------*/
    var slice = svg.select(".slices").selectAll("path.slice")
        .data(pie(data), key);

    slice.enter()
        .insert("path")
        .style("fill", function(d) { return color(d.data.label); })
        .attr("class", "slice");

    slice       
        .transition().duration(1000)
        .attrTween("d", function(d) {
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                return arc(interpolate(t));
            };
        })

    slice.exit()
        .remove();

    /* ------- TEXT LABELS -------*/

    var text = svg.select(".labels").selectAll("text")
        .data(pie(data), key);

    text.enter()
        .append("text")
        .attr("dy", ".35em")
        .text(function(d) {
            return d.data.label;
        });
    
    function midAngle(d){
        return d.startAngle + (d.endAngle - d.startAngle)/2;
    }

    text.transition().duration(1000)
        .attrTween("transform", function(d) {
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                var d2 = interpolate(t);
                var pos = outerArc.centroid(d2);
                pos[0] = radius * (midAngle(d2) < Math.PI ? 1 : -1);
                return "translate("+ pos +")";
            };
        })
        .styleTween("text-anchor", function(d){
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                var d2 = interpolate(t);
                return midAngle(d2) < Math.PI ? "start":"end";
            };
        });

    text.exit()
        .remove();

    /* ------- SLICE TO TEXT POLYLINES -------*/

    var polyline = svg.select(".lines").selectAll("polyline")
        .data(pie(data), key);
    
    polyline.enter()
        .append("polyline");

    polyline.transition().duration(1000)
        .attrTween("points", function(d){
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                var d2 = interpolate(t);
                var pos = outerArc.centroid(d2);
                pos[0] = radius * 0.95 * (midAngle(d2) < Math.PI ? 1 : -1);
                return [arc.centroid(d2), outerArc.centroid(d2), pos];
            };          
        });
    
    polyline.exit()
        .remove();
};



function math_change(data) {

    /* ------- PIE SLICES -------*/
    var slice = math_svg.select(".slices").selectAll("path.slice")
        .data(pie(data), math_key);

    slice.enter()
        .insert("path")
        .style("fill", function(d) { return math_color(d.data.label); })
        .attr("class", "slice");

    slice       
        .transition().duration(1000)
        .attrTween("d", function(d) {
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                return math_arc(interpolate(t));
            };
        })

    slice.exit()
        .remove();

    /* ------- TEXT LABELS -------*/

    var text = math_svg.select(".labels").selectAll("text")
        .data(pie(data), math_key);

    text.enter()
        .append("text")
        .attr("dy", ".20em")
        .text(function(d) {
            return d.data.label;
        });
    
    function midAngle(d){
        return d.startAngle + (d.endAngle - d.startAngle)/2;
    }

    text.transition().duration(1000)
        .attrTween("transform", function(d) {
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                var d2 = interpolate(t);
                var pos = math_outerArc.centroid(d2);
                pos[0] = math_radius * (midAngle(d2) < Math.PI ? 1 : -1);
                return "translate("+ pos +")";
            };
        })
        .styleTween("text-anchor", function(d){
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                var d2 = interpolate(t);
                return midAngle(d2) < Math.PI ? "start":"end";
            };
        });

    text.exit()
        .remove();

    /* ------- SLICE TO TEXT POLYLINES -------*/

    var polyline = math_svg.select(".lines").selectAll("polyline")
        .data(pie(data), math_key);
    
    polyline.enter()
        .append("polyline");

    polyline.transition().duration(1000)
        .attrTween("points", function(d){
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                var d2 = interpolate(t);
                var pos = math_outerArc.centroid(d2);
                pos[0] = math_radius * 0.95 * (midAngle(d2) < Math.PI ? 1 : -1);
                return [math_arc.centroid(d2), math_outerArc.centroid(d2), pos];
            };          
        });
    
    polyline.exit()
        .remove();
};
function cog_change(data) {

    /* ------- PIE SLICES -------*/
    var slice = cog_svg.select(".slices").selectAll("path.slice")
        .data(pie(data), cog_key);

    slice.enter()
        .insert("path")
        .style("fill", function(d) { return cog_color(d.data.label); })
        .attr("class", "slice");

    slice       
        .transition().duration(1000)
        .attrTween("d", function(d) {
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                return cog_arc(interpolate(t));
            };
        })

    slice.exit()
        .remove();

    /* ------- TEXT LABELS -------*/

    var text = cog_svg.select(".labels").selectAll("text")
        .data(pie(data), cog_key);

    text.enter()
        .append("text")
        .attr("dy", ".20em")
        .text(function(d) {
            return d.data.label;
        });
    
    function midAngle(d){
        return d.startAngle + (d.endAngle - d.startAngle)/2;
    }

    text.transition().duration(1000)
        .attrTween("transform", function(d) {
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                var d2 = interpolate(t);
                var pos = cog_outerArc.centroid(d2);
                pos[0] = cog_radius * (midAngle(d2) < Math.PI ? 1 : -1);
                return "translate("+ pos +")";
            };
        })
        .styleTween("text-anchor", function(d){
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                var d2 = interpolate(t);
                return midAngle(d2) < Math.PI ? "start":"end";
            };
        });

    text.exit()
        .remove();

    /* ------- SLICE TO TEXT POLYLINES -------*/

    var polyline = cog_svg.select(".lines").selectAll("polyline")
        .data(pie(data), cog_key);
    
    polyline.enter()
        .append("polyline");

    polyline.transition().duration(1000)
        .attrTween("points", function(d){
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                var d2 = interpolate(t);
                var pos = cog_outerArc.centroid(d2);
                pos[0] = cog_radius * 0.95 * (midAngle(d2) < Math.PI ? 1 : -1);
                return [cog_arc.centroid(d2), cog_outerArc.centroid(d2), pos];
            };          
        });
    
    polyline.exit()
        .remove();
};
function chi_change(data) {

    /* ------- PIE SLICES -------*/
    var slice = chi_svg.select(".slices").selectAll("path.slice")
        .data(pie(data), chi_key);

    slice.enter()
        .insert("path")
        .style("fill", function(d) { return chi_color(d.data.label); })
        .attr("class", "slice");

    slice       
        .transition().duration(1000)
        .attrTween("d", function(d) {
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                return chi_arc(interpolate(t));
            };
        })

    slice.exit()
        .remove();

    /* ------- TEXT LABELS -------*/

    var text = chi_svg.select(".labels").selectAll("text")
        .data(pie(data), chi_key);

    text.enter()
        .append("text")
        .attr("dy", ".20em")
        .text(function(d) {
            return d.data.label;
        });
    
    function midAngle(d){
        return d.startAngle + (d.endAngle - d.startAngle)/2;
    }

    text.transition().duration(1000)
        .attrTween("transform", function(d) {
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                var d2 = interpolate(t);
                var pos = chi_outerArc.centroid(d2);
                pos[0] = chi_radius * (midAngle(d2) < Math.PI ? 1 : -1);
                return "translate("+ pos +")";
            };
        })
        .styleTween("text-anchor", function(d){
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                var d2 = interpolate(t);
                return midAngle(d2) < Math.PI ? "start":"end";
            };
        });

    text.exit()
        .remove();

    /* ------- SLICE TO TEXT POLYLINES -------*/

    var polyline = chi_svg.select(".lines").selectAll("polyline")
        .data(pie(data), chi_key);
    
    polyline.enter()
        .append("polyline");

    polyline.transition().duration(1000)
        .attrTween("points", function(d){
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                var d2 = interpolate(t);
                var pos = chi_outerArc.centroid(d2);
                pos[0] = chi_radius * 0.95 * (midAngle(d2) < Math.PI ? 1 : -1);
                return [chi_arc.centroid(d2), chi_outerArc.centroid(d2), pos];
            };          
        });
    
    polyline.exit()
        .remove();
};
function clock_change(data) {

    /* ------- PIE SLICES -------*/
    var slice = clock_svg.select(".slices").selectAll("path.slice")
        .data(pie(data), clock_key);

    slice.enter()
        .insert("path")
        .style("fill", function(d) { return clock_color(d.data.label); })
        .attr("class", "slice");

    slice       
        .transition().duration(1000)
        .attrTween("d", function(d) {
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                return clock_arc(interpolate(t));
            };
        })

    slice.exit()
        .remove();

    /* ------- TEXT LABELS -------*/

    var text = clock_svg.select(".labels").selectAll("text")
        .data(pie(data), clock_key);

    text.enter()
        .append("text")
        .attr("dy", ".20em")
        .text(function(d) {
            return d.data.label;
        });
    
    function midAngle(d){
        return d.startAngle + (d.endAngle - d.startAngle)/2;
    }

    text.transition().duration(1000)
        .attrTween("transform", function(d) {
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                var d2 = interpolate(t);
                var pos = clock_outerArc.centroid(d2);
                pos[0] = clock_radius * (midAngle(d2) < Math.PI ? 1 : -1);
                return "translate("+ pos +")";
            };
        })
        .styleTween("text-anchor", function(d){
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                var d2 = interpolate(t);
                return midAngle(d2) < Math.PI ? "start":"end";
            };
        });

    text.exit()
        .remove();

    /* ------- SLICE TO TEXT POLYLINES -------*/

    var polyline = clock_svg.select(".lines").selectAll("polyline")
        .data(pie(data), clock_key);
    
    polyline.enter()
        .append("polyline");

    polyline.transition().duration(1000)
        .attrTween("points", function(d){
            this._current = this._current || d;
            var interpolate = d3.interpolate(this._current, d);
            this._current = interpolate(0);
            return function(t) {
                var d2 = interpolate(t);
                var pos = clock_outerArc.centroid(d2);
                pos[0] = clock_radius * 0.95 * (midAngle(d2) < Math.PI ? 1 : -1);
                return [clock_arc.centroid(d2), clock_outerArc.centroid(d2), pos];
            };          
        });
    
    polyline.exit()
        .remove();
};
</script>
</body>