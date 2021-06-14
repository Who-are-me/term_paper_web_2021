var path = window.location.pathname;
var page = path.split("/").pop();

console.log(page);
switch (page) {
  case '':
    $('#maPage').css("border-bottom", "rgba(233, 63, 52, 0.75) 2px solid");
    break;
    
  case 'about_us':
    $('#abPage').css("border-bottom", "rgba(233, 63, 52, 0.75) 2px solid");
    break;

  case 'matbase':
    $('#mtPage').css("border-bottom", "rgba(233, 63, 52, 0.75) 2px solid");
    break;

  case 'to_entrant':
    $('#enPage').css("border-bottom", "rgba(233, 63, 52, 0.75) 2px solid");
    break;

  case 'student':
    $('#stPage').css("border-bottom", "rgba(233, 63, 52, 0.75) 2px solid");
    break;

  case 'tidings':
    $('#tiPage').css("border-bottom", "rgba(233, 63, 52, 0.75) 2px solid");
    break;

  case 'contacts':
    $('#coPage').css("border-bottom", "rgba(233, 63, 52, 0.75) 2px solid");
    break;

  default:
    ;
}