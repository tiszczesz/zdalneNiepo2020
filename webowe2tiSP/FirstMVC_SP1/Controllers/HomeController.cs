using Microsoft.AspNetCore.Mvc;

namespace FirstMVC_SP1.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Index(){
            return Content("Hello from MVC bla bla bla");
        }

        public IActionResult Action2(int? id) {
            ViewBag.controller = ControllerContext.ActionDescriptor.ControllerName;
            ViewBag.action = ControllerContext.ActionDescriptor.ActionName;
            return View(id);
        }
    }
}