// 变量
let myVariable;                 // var 也可以定义变量
// let 作用域更窄，只对同层级生效，var 对同级和下级单位均有效；
// let 作用域更窄，只想更明确，优先使用 let 定义变量；
// JS 对大小写敏感；
// 行尾分号表示当前语句结束，语句结尾加分号是一种好习惯；
myVariable = 'bianliang';       // 变量复制
let myVariable = 'bianliang';   // 定义并复赋值
myVariable = 'new bianliang';   // 变量值更新


// 数据类型
/*
String, 字符串，引号括起来； let myVar = 'string';
Number, 数字； let myVar = 20;
Boolean, 布尔； let myVar = true;
Array, 数组，单一引用存储多个值； let myVar = [1, 'string', true];
Object, 一切皆对象； let myVar = document.querySelector('h1');
*/


// 运算符
/*
加减乘除, + - * /
赋值， = 
等于， ===
不等于， !==
取非， ! 
*/


// 条件语句
let iceCream = 'chocolate';     // 赋值
if (iceCream === 'chocolate') { // 判断
    alert('我喜欢巧克力冰激凌');   // 响应
} else {
    alert('但我喜欢巧克力');
}


// 函数
function multiply(num1, num2) { // 定义参数；
    let result = num1 * num2;   // 定义计算过程；
    return result;              // 函数的结果需要返回；
}


// 点击事件
// 为整个 HTML 网页增加点击事件，触发的事件是后面的函数体；
document.querySelector('html').onclick = function() {
    alert('别戳我，我怕疼。');     // 函数为弹出对话框显示提示文本；
}
// 上述触发点击事件的过程等价于以下分步过程：
let myHTML = document.querySelector('html');
myHTML.onclick = function(){};


// 点击切换图像
let myImage = document.querySelector('img');
myImage.onclick = function() {
    let mySrc = myImage.getAttribute('src');
    if(mySrc === 'pic1.png'){
        myImage.setAttribute('src', 'pic2.png');
    } else {
        myImage.setAttribute('src', 'pic1.png');
    }
}


// 增加个性化欢迎信息，捕获输入
// 在 HTML 文件中增加按钮代码： <button>切换用户</button>;
let myButton = document.querySelector('button');
let myHeading = document.querySelector('h1');
// 
