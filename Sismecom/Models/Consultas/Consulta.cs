using Sismecom.Models.Pessoas;

namespace Sismecom.Models.Consultas
{
    public class Consulta
    {
        public Paciente Paciente { get; set; }
        public Medico Medico { get; set; }
        public Recepcionista RecepcionistaId { get; set; }
        public string Especialidade { get; set; }
        public decimal Valor { get; set; }
        public DateTime DataConsulta { get; set; }
        public DateTime? DataCancelamento { get; set; }
    }
}
