namespace Sismecom.Models.Consultas
{
    public class ConsultaRequest
    {
        public int PacienteId { get; set; }
        public int MedicoId { get; set; }
        public int RecepcionistaId { get; set; }
        public string Especialidade { get; set; }
        public decimal Valor { get; set; }
        public DateTime DataHoraConsulta { get; set; }
        public string dataConsulta => DataHoraConsulta.ToString("yyyy-MM-dd");
        public string horaConsulta => DataHoraConsulta.ToString("HH:mm:ss");
    }
}
