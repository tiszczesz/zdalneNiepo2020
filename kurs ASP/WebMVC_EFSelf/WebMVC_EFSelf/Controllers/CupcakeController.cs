using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.Extensions.Hosting;
using WebMVC_EFSelf.Data;

namespace WebMVC_EFSelf.Controllers
{
    public class CupcakeController : Controller {
        private IHostEnvironment _environment;
        private CupcakeContext _db;
        public CupcakeController(IHostEnvironment environment,CupcakeContext context) {
            _environment = environment;
            _db = context;
        }
        public IActionResult Index()
        {
            //CupcakeContext dContext = _environment.
            return View(_db.Cupcakes);
        }
    }
}
