using Microsoft.AspNetCore.Mvc;
using Sismecom.Infra.Repository.Pessoas;
using Sismecom.Models.Pessoas;

namespace Sismecom.Controllers.Pessoas
{
    
   
    public class PacienteController : ControllerBase
    {
        private readonly IPacienteRepository _repo;

        public PacienteController(IPacienteRepository repo)
        {
            _repo = repo;
        }
        [HttpGet("[controller]/lista")]
        public IActionResult ListarPacientes()
        {
            var lista = _repo.Listar();
            return Ok(lista);
        }

        [HttpPost("[controller]/cadastro")]
        public IActionResult CadastrarPaciente([FromBody] Paciente model)
        {
            _repo.Cadastrar(model);

            return Created("site.com", model);
        }
    }
}
