var path = window.location.pathname;
var page = path.split("/").pop();

console.log(page);
switch (page) {
  case '':
    $('#maPage').css("border-bottom", "rgba(233, 63, 52, 0.75) 2px solid");
    $('#maPage').css("font-weight", "bold");
    $('#maPage').css("color", "white");
    break;
    
  case 'about_us':
    $('#abPage').css("border-bottom", "rgba(233, 63, 52, 0.75) 2px solid");
    $('#abPage').css("font-weight", "bold");
    $('#abPage').css("color", "white");
    break;

  case 'matbase':
    $('#mtPage').css("border-bottom", "rgba(233, 63, 52, 0.75) 2px solid");
    $('#mtPage').css("font-weight", "bold");
    $('#mtPage').css("color", "white");
    break;

  case 'to_entrant':
    $('#enPage').css("border-bottom", "rgba(233, 63, 52, 0.75) 2px solid");
    $('#enPage').css("font-weight", "bold");
    $('#enPage').css("color", "white");
    break;

  case 'student':
    $('#stPage').css("border-bottom", "rgba(233, 63, 52, 0.75) 2px solid");
    $('#stPage').css("font-weight", "bold");
    $('#stPage').css("color", "white");
    break;

  case 'tidings':
    $('#tiPage').css("border-bottom", "rgba(233, 63, 52, 0.75) 2px solid");
    $('#tiPage').css("font-weight", "bold");
    $('#tiPage').css("color", "white");
    break;

  case 'contacts':
    $('#coPage').css("border-bottom", "rgba(233, 63, 52, 0.75) 2px solid");
    $('#coPage').css("font-weight", "bold");
    $('#coPage').css("color", "white");
    break;

  default:
    ;
}